<?php

namespace App\Notifications;

use App\Mail\CustomerVerificated as MailCustomerVerificated;
use App\Models\Customer;
use App\Models\CustomerVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerVerificated extends Notification
{
    use Queueable;

    /**
     * The customer verification model instance.
     *
     * @var \App\Models\CustomerVerification
     */
    public $customer_verification;

    /**
     * The customer verification model instance.
     *
     * @var \App\Models\Customer
     */
    public $customer;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\CustomerVerification $customer_verification
     * @param \App\Models\Customer $customer
     * @return void
     */
    public function __construct(CustomerVerification $customer_verification, Customer $customer)
    {
        $this->customer_verification = $customer_verification;
        $this->customer = $customer;
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
        return (new MailCustomerVerificated($this->customer))
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
            // ->content("Customer Verificated\nRegistration: {$this->customer->registration}")
            // ->to($this->customer_verification);
            ->content("Kepada Pelanggan Terhormat, *{$this->customer->name}*.\nData pemesanan layanan jasa *{$this->customer->service->name}* pada PT. Hukum Digital Anda telah berhasil diverifikasi.\n\nSilahkan Check Detail dan Progress layanan anda hudit.bladerlaiga.my.id/check  \nMasukkan kode Registration: *{$this->customer->registration}* \n\nJika ada pertanyaan tambahan atau perubahan yang perlu Anda sampaikan, jangan ragu untuk menghubungi admin kami melalui WhatsApp 082399535262.
                \nTerima kasih atas kepercayaan Anda kepada kami. Kami berharap dapat memberikan layanan terbaik kepada Anda.
                \nSalam hangat,\n[PT. Hukum Digital Indonesia]")
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
