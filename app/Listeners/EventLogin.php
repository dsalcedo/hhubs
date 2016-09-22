<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventLogin
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
    public function handle(Login $event)
    {
        //dd($event->user);
    }

    public function loggedIn(Login $event)
    {
        $usuario = $event->user;

        if($usuario->hasRole('admin')){
            $redirectPath = 'manager.index';
        }elseif ($usuario->hasRole('instructor')){
            $redirectPath = 'web.index';
        }else{
            $redirectPath = 'app.index';
        }

        return redirect()->route($redirectPath);


        //dd($redirectPath);

        //return redirect()->route($redirectPath);

    }

    public function onUserLogin($event)
    {
        $usuario = $event->user;

        if($usuario->hasRole('admin')){
            $redirectPath = 'manager.index';
        }elseif ($usuario->hasRole('instructor')){
            $redirectPath = 'web.index';
        }else{
            $redirectPath = 'app.index';
        }

        return redirect()->route($redirectPath);
    }
}
