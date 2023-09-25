<?php

namespace App\Listeners;

use App\Events\SubmissionStatusChanged;
use App\Notifications\SubmissionStatusChanged as NotificationsSubmissionStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendSubmissionStatusChangedNotification
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
     * @param  \App\Events\SubmissionStatusChanged  $event
     * @return void
     */
    public function handle(SubmissionStatusChanged $event)
    {
        Notification::sendNow(auth()->user(), new NotificationsSubmissionStatusChanged($event->submission));
    }
}
