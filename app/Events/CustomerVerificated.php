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

class CustomerVerificated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

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
     * Create a new event instance.
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
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
