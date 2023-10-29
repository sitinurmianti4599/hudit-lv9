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
            ->subject('Permohonan Ditolak')
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
            ->content("Kepada Pelanggan Terhormat, *{$this->customer_verification->name}*.
            \nMohon maaf, Permohonan permintaan untuk :  
Layanan jasa : {$this->customer_verification->service->name} 
Jenis Layanan : {$this->customer_verification->service->type->name}
            \nYang anda ajukan pada PT. Hukum Digital \n*DITOLAK*
            \nSetelah dilakukan pengecekan ada beberapa informasi  yang  tidak  valid. Untuk informasi selanjutnya, silahkan hubungi admin kami melalui WhatsApp api.whatsapp.com/send?phone=082399535262   
            \nSalam hangat, 
[PT. Hukum Digital Indonesia]")
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
