<?php

namespace  Tendaz\Models\Subscription;

use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Object_;
use Tendaz\Api\Twocheckout;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\UuidAndShopTrait;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use UuidAndShopTrait;

    const active = 'active';
    const cancel = 'cancelled';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'amount', 'state', 'start_at', 'end_at', 'trial_at', 'shop_id', 'plan_id','recurrent', 'sale_id', 'payment_status'
    ];


    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function gracePeriod()
    {
        return property_exists($this , 'grace_period') ? $this->grace_period : 10;
    }

    public function makeSubscription()
    {
        $this->shop->subscription_id = $this->id;
        $this->shop->save();
    }

    public function skipTrial()
    {
        $this->trial_at =  null;
        $this->save();
        return $this;
    }

    public function onRecurrent($sale_id = null)
    {
        $this->sale_id =  $sale_id;
        $this->recurrent =  1;
        $this->save();
    }

    public function swap(Plan $plan)
    {
        $this->plan_id = $plan->id;
        $this->save();
    }

    public function onTrial()
    {
        return !is_null($this->trial_at) && Carbon::parse($this->trial_at)->isFuture() &&  !$this->cancelled();
    }

    public function cancelled()
    {
        return $this->state == self::cancel && $this->notFinish();
    }

    public function subscribed()
    {
        return $this->isActive() && $this->notFinish();
    }

    public function isGrace($function)
    {
        return Carbon::parse($this->end_at)->$function($this->gracePeriod())->isFuture();
    }

    public function onGracePeriodBefore()
    {
        return $this->notFinish() && !$this->isGrace('subDays');
    }

    public function onGracePeriod()
    {
        return !$this->notFinish() && $this->isGrace('addDays') && !is_null($this->end_at);
    }

    public function isActive()
    {
        return $this->state == self::active;
    }

    public function notFinish()
    {
        return !is_null($this->end_at) && Carbon::parse($this->end_at)->isFuture();
    }

    public function subscribedToPlan($plan)
    {
        return $this->plan_id >= Plan::findName($plan)->id;
    }

    public function isSamePlanSubscription($plan)
    {
        return Plan::find($this->plan_id)->plan_id == $plan->plan->id;
    }

    public function createPayment($cardToken , $position )
    {
        $position = (object) $position;

        Twocheckout::privateKey(env('PRIVATE_KEY_TWO'));
        Twocheckout::sellerId(env('SELLER_ID_TWO'));
        Twocheckout::sandbox(true);

        $charge = Twocheckout\Twocheckout_Charge::auth(array(
            "sellerId" => env('SELLER_ID_TWO'),
            "merchantOrderId" => "123",
            "token" => $cardToken,
            "currency" => 'USD',
            "lineItems" => array(
                array(
                    "type" => 'product',
                    "price" => $this->plan->getTotalPriceWithDiscount(),
                    "productId" => $this->plan->uuid,
                    "name" => $this->plan->name. " plan ". $this->plan->plan->name,
                    "quantity" => "1",
                    "tangible" => "N",
                    "recurrence" => $this->plan->getIntervalInMonthly(). " Month",
                    "duration" => 'Forever',
                    "description" => $this->plan->description
                )
            ),
            "billingAddr" => array(
                "name" => !$this->shop->user->full_name == ' ' ?  $this->shop->user->full_name : $this->shop->name,
                "addrLine1" => 'Colina Campestre',
                "city" => empty($position->cityName) ? 'Bogota': $position->cityName,
                "state" =>  empty($position->regionCode) ? 'BOG': $position->regionCode,
                "zipCode" => empty($position->zipCode) ? '111461': $position->zipCode,
                "country" =>  empty($position->countryCode) ? 'CO': $position->countryCode,
                "email" => $this->shop->user->email,
                "phoneNumber" =>  $this->shop->user->phone
            ),
        ));

        $this->assertEquals('APPROVED', $charge['response']['responseCode']);

        //Aqui va el codigo para crear una nueva factura de cobro
        //falta la url de notificacion genera una nueva factura
        //en facturafalta el boleano de cancelada
        //asi como hay crear pago debe estar la opcion de para subscripcion
        //y debe esta la opcion de cancelar subscripcion

        return $this;
    }

    public function assertEquals($status , $response)
    {
        if ($status != $response){
            $this->shop->updateSubscription();
        }
    }
}
