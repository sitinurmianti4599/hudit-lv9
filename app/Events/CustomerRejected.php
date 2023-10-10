<?php

namespace App\Events;

use App\Models\Customer;
use App\Models\CustomerVerification;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CustomerRejected
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The customer verification model instance.
     *
     * @var \App\Models\CustomerVerification
     */
    public $customer_verification;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\CustomerVerification $customer_verification
     * @return void
     */
    public function __construct(CustomerVerification $customer_verification)
    {
        $this->customer_verification = $customer_verification;
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
