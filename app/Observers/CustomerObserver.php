<?php

namespace App\Observers;

use App\Events\CustomerStatusChanged;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Submission;
use Illuminate\Support\Str;

class CustomerObserver
{
    public function creating(Customer $customer)
    {
        $service_type = Service::find($customer->service_id)->type;
        $customer->registration = "{$service_type->code}-" . Str::random(6);
        $customer->service_type_id = $service_type->id;
    }
    public function created(Customer $customer)
    {
        /** @var Service */
        $service = Service::find($customer->service_id);
        foreach ($service->files()->get() as $file) {
            Submission::create([
                'customer_id' => $customer->id,
                'file_id' => $file->id,
            ]);
        }
    }
    public function updating(Customer $customer)
    {
        /** @var Customer */
        $old = Customer::find($customer->id);
        if ($customer->status != $old->status) {
            CustomerStatusChanged::dispatch($customer);
        }
    }
    public function updated(Customer $customer)
    {
        //
    }
    public function deleted(Customer $customer)
    {
        //
    }
    public function restored(Customer $customer)
    {
        //
    }
    public function forceDeleted(Customer $customer)
    {
        //
    }
}
