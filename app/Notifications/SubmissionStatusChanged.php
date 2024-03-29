<?php

namespace App\Notifications;

use App\Mail\SubmissionStatusChanged as MailSubmissionStatusChanged;
use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubmissionStatusChanged extends Notification
{
    use Queueable;

    /**
     * The submission verification model instance.
     *
     * @var \App\Models\Submission
     */
    public $submission;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\Submission $submission
     * @return void
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
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
        return (new MailSubmissionStatusChanged($this->submission))
            ->to($this->submission->customer);
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
            // ->content("Submission Status Changed\nRegistration: {$this->submission->customer->registration}\nSubmission: {$this->submission->file->name}\nStatus: {$this->submission->status}")
            // ->to($this->submission->customer);

            ->content("Kepada Pelanggan Terhormat, *{$this->submission->customer->name}*.
            Kami ingin memberitahu Anda tentang perkembangan terbaru terkait layanan jasa *{$this->submission->customer->service->name}*
            pada PT. Hukum Digital yang Anda gunakan, sebagai berikut : 
            \n\nKode Registration : *{$this->submission->customer->registration}*
            Nama Berkas : *{$this->submission->file->name}*
            Status Berkas: *{$this->submission->status}* \n\nUntuk informasi lainnya,
            Silahkan Check Detail dan Progress layanan anda hudit.bladerlaiga.my.id/check
            \nMasukkan kode Registration: *{$this->submission->customer->registration}*
    
            \n\nSalam hangat, 
            \n[PT. Hukum Digital Indonesia]")
            ->to($this->submission->customer);
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
