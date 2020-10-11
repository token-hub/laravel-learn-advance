<?php

namespace App\Listeners;

use App\Notifications\Mail;
use App\Events\UserWasBannned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailBanNotification implements ShouldQueue
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
     * @param  UserWasBannned  $event
     * @return void
     */
    public function handle(UserWasBannned $event)
    {
        // $event->user->notify(new Mail());
        dd('Notify '.$event->user->name.' that they have been banned');
    }
}
