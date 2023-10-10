<?php

namespace App\Listeners;

use App\Events\CustomerRejected;
use App\Notifications\CustomerRejected as NotificationsCustomerRejected;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendCustomerRejectedNotification
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
     * @param  \App\Events\CustomerRejected  $event
     * @return void
     */
    public function handle(CustomerRejected $event)
    {
        Notification::sendNow(auth()->user(), new NotificationsCustomerRejected($event->customer_verification));
    }
}
