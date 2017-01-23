<?php

namespace Tendaz\Traits;


use Carbon\Carbon;

trait SubscriptionTrait
{
    public function datesForTest()
    {
        return Carbon::now()->addDays($this->trialAt());
    }

    private function trialAt()
    {
        return property_exists($this , 'dates_test') ? $this->dates_test : 15;
    }
}