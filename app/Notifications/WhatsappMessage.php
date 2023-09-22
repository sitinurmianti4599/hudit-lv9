<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;

class WhatsappMessage
{
    public string $sid;
    public string $token;

    public string $sender;
    public string $recipient;
    public string $body;

    public string $code = '+62';

    public function __construct()
    {
        $this->sid = env('TWILIO_SID');
        $this->token = env('TWILIO_TOKEN');
        $this->sender = env('TWILIO_WHATSAPP_ADDRESS');
    }
    public function from(object|string $address)
    {
        if (is_object($address)) {
            $this->sender = $address->telp;
        } else {
            $this->sender = $address;
        }
        $this->sender = $this->intl($this->sender);
        return $this;
    }
    public function to(object|string $address)
    {
        if (is_object($address)) {
            $this->recipient = $address->telp;
        } else {
            $this->recipient = $address;
        }
        $this->recipient = $this->intl($this->recipient);
        return $this;
    }
    public function content(string $body)
    {
        $this->body = $body;
        return $this;
    }
    protected function intl(string $address)
    {
        if (str_starts_with($address, '0')) {
            return $this->code . substr($address, 1);
        } else {
            return $address;
        }
    }
}
