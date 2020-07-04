<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;

class LoginSuccess
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

    

    public function handle(Login $login)
    {
        Session::flash('message', 'Hi ' . $login->user->name . ', nice to see you again');
    }
    /**
     * Handle the event.
     *
     * @param  IlluminateAuthEventsLogin  $event
     * @return void
     
    public function handle(IlluminateAuthEventsLogin $event)
    {
        //
    }
    */
}
