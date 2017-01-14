<?php

namespace Tendaz\Models\Order;

use Carbon\Carbon;
use Tendaz\Models\Address\CustomerAddress;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Customer;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\Models\Products\Variant;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Models\Store\Shop;
use Tendaz\Traits\CacheTagsTrait;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;
use Illuminate\Support\Facades\DB;
use Tendaz\Scopes\OrderStatusScope;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use WhereShopTrait , CacheTagsTrait , UuidAndShopTrait;

    protected $table = 'orders';
    
    protected $fillable = [
        'uuid' , 'total' , 'name' , 'shipping_address_id', 'last_name' , 'phone' , 'identification' , 'email' ,'total_discount' , 'total_tax' , 'total_inc_tax' , 'shipping_method_id' , 'total_exec_tax' , 'total_products' , 'total_shipping' , 'total_shipping_exec_tax' , 'total_shipping_inc_tax' , 'note' , 'shipping' , 'cart_id' , 'order_status' , 'shop_id'
    ];

    public function scopeNotInitOrders($query)
    {
        return $query->whereHas('status' , function ($q){
            $q->where('id' , '<>' , 1)->orWhereNull('orders.order_status');
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
    
    /**
     * RELATIONSHIP 
     */
    public function histories()
    {
        return $this->hasMany(OrderHistory::class,'order_id');
    }

    public function products()
    {
        return $this->belongsToMany(Variant::class, 'order_item')->withPivot('quantity');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function status(){
        return $this->belongsTo(OrderStatus::class , 'order_status');
    } 
    
    public function user(){
        return $this->belongsTo(Customer::class , 'customer_id');
    }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class , 'shipping_method_id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo(CustomerAddress::class , 'shipping_address_id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentValue::class , 'payment_method');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    /**
     ** Scopes
    **/
    
    public function scopeSalesMonthly($query){
        return $query->lastestMonthly()->ByDateAndTotal();
    }

    public function scopeLastestMonthly($query){
        return $query->Monthly()->orderID();
    }

    public function scopeLastestWeekly($query){
        $query->whereBetween('created_at'  ,[Carbon::today()->subDays(8) , Carbon::today()])->orderID();
    }

    public function scopeOrderID($query){
        $query->orderBy('id' , 'DESC');
    }

    public function scopeByDateAndCount($query){
        return $query->select(DB::raw('DATE(created_at) as day') , DB::raw('count(*) as sale'))->groupBy('day');
    }
    
    public function scopeByDateAndTotal($query){
        return $query->select(DB::raw('DATE(created_at) as day') , DB::raw('SUM(total) as total'))->groupBy('day');
    }

    public function scopeDay($query){
        $query->whereDay('created_at' , '=' , date('d'));
    }
    
    public function scopeYesterday($query){
        $query->whereDay('created_at', Carbon::yesterday()->day);
    }
    
    public function scopeMore($query){
        $query->where('created_at' , '<' ,Carbon::yesterday());
    }

    public function scopeWeekly($query){
        $query->whereBetween('created_at' , [ Carbon::today()->startOfWeek() , Carbon::today()->endOfWeek()]);
    }

    public function scopeMonthly($query){
        $query->whereMonth('created_at' , '=' , date('m'));
    }

    public function scopeCurrentState($query){
        $query->whereIn('current_state', [3, 6, 7 , 11]);
    }
    public function scopeGroup($query , $field){
        $query->groupBy($field);
    }

    public function scopeOrder($query , $field){
        $query->orderBy($field , 'DESC');
    }

    public function scopePending($query ){
        $query->where('current_state' , '<' , 6);
    }

    /**
     * STATICS
     */
    
    public static function TotalMonth(){
        return Order::Monthly()->NotInitOrders()->sum('total');
    }

    public static function TotalDay(){
        return Order::Day()->NotInitOrders()->sum('total');
    }

    public static function TotalCountMonth(){
        return Order::Monthly()->NotInitOrders()->count();
    }
    
    public static function TotalCountDay(){
        return Order::Day()->NotInitOrders()->count();
    }

    public static function TotalWeek(){
        return Order::Weekly()->NotInitOrders()->sum('total');
    }

    public static function TotalCountWeek(){
        return Order::Weekly()->NotInitOrders()->count();
    }

    public static  function CountWeekly(){
        return Order::LastestWeekly()->ByDateAndCount()->NotInitOrders()->get()->toArray();
    }

    public  static function SalesWeekly(){
            return Order::LastestWeekly()->ByDateAndTotal()->NotInitOrders()->get()->toArray();
    }

    public  static function ByStatus(){
        return  Order::currentState()
            ->select('current_state', DB::raw('count(*) as total'))
            ->group('current_state')
            ->order('current_state')
            ->NotInitOrders()
            ->get()
            ->toArray();
    }

    public  static function ByDate(){
        return   Order::select(DB::raw('count(*) as total, DATE(created_at) as day'))
            ->group('day')
            ->order('day')
            ->NotInitOrders()
            ->get()
            ->toArray();
    }

    public  static function OrderPendingDay(){
        return      Order::pending()
                    ->day()
                    ->NotInitOrders()
                    ->count();
    }   
    
    public  static function OrderPendingYesterday(){
        return  Order::pending()
            ->yesterday()
            ->NotInitOrders()
            ->count();
    } 
    
    public  static function OrderPendingMore(){
        return   Order::pending()
            ->more()
            ->NotInitOrders()
            ->count();
    }
    public  static function totalSold(){
        return (int) Order::NotInitOrders()->sum('total');
    }

    public  static function totalOrders(){
        return  (int) Order::NotInitOrders()->count();
    }  
    
    public  function getCreatedAtAttribute(){
        return  Carbon::parse($this->attributes['created_at'])->format('m/d/Y');
    }

    public function updateStatus($status)
    {
        $this->order_status = trans("payments.status.$status");
        $this->save();
    }

}
