<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Twilio\Rest\Client;

class WhatsappChannel
{
    /**
     * Send the given notification.
     */
    public function send(object $notifiable, Notification $notification): void
    {
        $message = $notification->toWhatsapp($notifiable);
        $sid = $message->sid;
        $token = $message->token;
        $client = new Client($sid, $token);
        $response = $client->messages->create(
            "whatsapp:$message->recipient",
            [
                'from' => "whatsapp:$message->sender",
                'body' => $message->body,
            ]
        );
        info("whatsapp response", ['status' => $response->status]);
    }
}
