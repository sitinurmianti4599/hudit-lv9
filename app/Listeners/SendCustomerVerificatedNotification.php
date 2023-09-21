<?php

namespace App\Listeners;

use App\Events\CustomerVerificated;
use App\Notifications\CustomerVerificated as NotificationsCustomerVerificated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendCustomerVerificatedNotification
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
     * @param  \App\Events\CustomerVerificated  $event
     * @return void
     */
    public function handle(CustomerVerificated $event)
    {
        Notification::sendNow(auth()->user(), new NotificationsCustomerVerificated($event->customer_verification, $event->customer));
    }
}
