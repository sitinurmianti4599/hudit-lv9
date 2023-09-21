<?php

namespace App\Observers;

use App\Models\Customer;
use App\Models\Report;
use App\Models\Submission;

class SubmissionObserver
{
    public function created(Submission $submission)
    {
        //
    }
    public function updating(Submission $submission)
    {
        if ($submission->status != 'done') {
            $submission->done = null;
        }
        /** @var Customer */
        $customer = Customer::find($submission->customer_id);
        /** @var Collection */
        $submissions = $customer->submissions()->whereNotIn('id', [$submission->id])->get();
        $submissions->push($submission);
        $customer->progress = round(($submissions->where('status', 'done')->count() / $submissions->count()) * 100);
        $customer->status = $customer->progress == 100 ? "done" : "progress";
        if ($customer->status == 'done') {
            $customer->done_date = now();
            $copy = $customer->toArray();
            $copy["service"] = $customer->service->name;
            $copy["service_type"] = $customer->service_type->name;
            Report::create($copy);
        } else {
            $customer->done_date = null;
        }
        $customer->save();
    }
    public function updated(Submission $submission)
    {
        //
    }
    public function deleted(Submission $submission)
    {
        //
    }
    public function restored(Submission $submission)
    {
        //
    }
    public function forceDeleted(Submission $submission)
    {
        //
    }
}
