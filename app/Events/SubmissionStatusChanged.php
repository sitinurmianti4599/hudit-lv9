<?php

namespace App\Events;

use App\Models\Submission;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionStatusChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The submission verification model instance.
     *
     * @var \App\Models\Submission
     */
    public $submission;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Submission $submission
     * @return void
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
