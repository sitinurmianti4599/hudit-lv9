<?php

namespace App\Notifications;

use App\Mail\CustomerStatusChanged as MailCustomerStatusChanged;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerStatusChanged extends Notification
{
    use Queueable;

    /**
     * The customer verification model instance.
     *
     * @var \App\Models\Customer
     */
    public $customer;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\Customer $customer
     * @return void
     */
    public function __construct(Customer $customer)
    {
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
        return (new MailCustomerStatusChanged($this->customer))
            ->to($this->customer);
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
            // ->content("Customer Status Changed\nRegistration: {$this->customer->registration}\nStatus: {$this->customer->status}")
            // ->to($this->customer);

            ->content("Kepada Pelanggan Terhormat, *{$this->customer->name}*.
            \nKami senang memberitahu Anda bahwa layanan jasa *{$this->customer->service->name}*
            pada PT. Hukum Digital yang Anda gunakan telah *SELESAI*, silahkan datang ke kantor untuk proses penyerahan dan peneyelesaian layanan.
            Tim kami telah bekerja keras untuk memastikan bahwa Anda mendapatkan hasil terbaik dan kami yakin Anda akan puas dengan hasilnya.
            \n\nBerikut adalah beberapa detail terkait selesainya layanan Anda :
            \nNama Pelanggan : *{$this->customer->name}*
            \nNama Layanan : *{$this->customer->service->name}*
            \nKode Registration : *{$this->customer->registration}*
            \nJenis Layanan : *{$this->customer->service->type->name}*
            \nTgl Order : *{$this->customer->order_date}*
            \nTgl Selesai : *{$this->customer->done_date}*

            \n\nKami ingin mengucapkan terima kasih atas kepercayaan Anda kepada kami. Kami berharap Anda merasa puas dengan layanan kami.             Silahkan Check Detail dan Progress layanan anda <a href='http://hudit.bladerlaiga.my.id/check'>Disini.</a><br>
            \nMasukkan kode Registration: *{$this->customer->registration}*
            \nUntuk informasi lengkapnya, Silahkan Kunjungi Kantor PT. Hukum Digital Indonesia.
            \n\nSalam hangat,\n[PT. Hukum Digital Indonesia]")
            ->to($this->customer);
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
