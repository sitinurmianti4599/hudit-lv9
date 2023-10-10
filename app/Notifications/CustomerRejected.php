<?php

namespace App\Notifications;

use App\Mail\CustomerVerificated as MailCustomerVerificated;
use App\Models\Customer;
use App\Models\CustomerVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Notification;

class CustomerRejected extends Notification
{
    use Queueable;

    /**
     * The customer verification model instance.
     *
     * @var \App\Models\CustomerVerification
     */
    public $customer_verification;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\CustomerVerification $customer_verification
     * @param \App\Models\Customer $customer
     * @return void
     */
    public function __construct(CustomerVerification $customer_verification)
    {
        $this->customer_verification = $customer_verification;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', WhatsappChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new Mailable)
            ->view('emails.customer_rejected', ['customer' => $this->customer_verification])
            ->to($this->customer_verification);
    }

    /**
     * Get the whatsapp representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \App\Notifications\WhatsappMessage
     */
    public function toWhatsapp($notifiable)
    {
        return (new WhatsappMessage())
            ->content("{$this->customer_verification->name}")
            ->to($this->customer_verification);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
