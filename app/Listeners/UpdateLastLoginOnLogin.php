<?php

namespace Tendaz\Listeners;

use Carbon\Carbon;

class UpdateLastLoginOnLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;
        $user->last_sign_in_at = $user->current_sign_in_at ? $user->current_sign_in_at : Carbon::now();
        $user->current_sign_in_at = Carbon::now();
        $user->sign_in_count += 1;
        $user->save();
    }
}
