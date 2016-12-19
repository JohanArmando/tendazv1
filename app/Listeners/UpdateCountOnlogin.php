<?php

namespace Tendaz\Listeners;


class UpdateCountOnlogin
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
        $user->sign_in_count += 1;
        $user->save();
    }
}
