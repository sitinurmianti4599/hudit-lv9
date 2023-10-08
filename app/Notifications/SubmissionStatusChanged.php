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

            ->content("Kepada Pelanggan Terhormat, <b>{$this->submission->customer->name}.</b><br>
            Kami ingin memberitahu Anda tentang perkembangan terbaru terkait layanan jasa <b>{$this->submission->customer->service->name} </b> 
            pada PT. Hukum Digital yang Anda gunakan, sebagai berikut : <br><br>
            Kode Registration : <b>{$this->submission->customer->registration}</b><br>
            Nama Berkas : <b>{$this->submission->file->name}</b><br>
            Status Berkas: <b>{$this->submission->status} </b> <br><br> Untuk informasi lainnya, <br>
            Silahkan Check Detail dan Progress layanan anda <a href='http://hudit.bladerlaiga.my.id/check'>Disini.</a><br>
            Masukkan kode Registration: <b>{$this->submission->customer->registration}</b> <br><br>
    
            Salam hangat, <br>
            [PT. Hukum Digital Indonesia]")
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
