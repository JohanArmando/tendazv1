<?php

namespace Tendaz\Traits;


use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;
use Tendaz\Models\Subscription\Subscription;

trait SubscriptionTrait
{
    public function datesForTest()
    {
        return Carbon::now()->addDays($this->trialAt());
    }

    public function sendTrialResponse($time , Subscription $subscription)
    {
        return Lang::get('subscription.trial.'.$time , ['time' =>  Carbon::parse($subscription->trial_at)->diffForHumans()]);
    }

    private function trialAt()
    {
        return property_exists($this , 'dates_test') ? $this->dates_test : 15;
    }
}