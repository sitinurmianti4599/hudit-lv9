<?php

namespace App\Listeners;

use App\Events\CustomerStatusChanged;
use App\Notifications\CustomerStatusChanged as NotificationsCustomerStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendCustomerStatusChangedNotification
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
     * @param  \App\Events\CustomerStatusChanged  $event
     * @return void
     */
    public function handle(CustomerStatusChanged $event)
    {
        Notification::sendNow(auth()->user(), new NotificationsCustomerStatusChanged($event->customer));
    }
}
