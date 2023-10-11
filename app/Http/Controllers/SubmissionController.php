<?php

namespace App\Http\Controllers;

use App\Events\SubmissionStatusChanged;
use App\Http\Requests\StoreSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }
    public function store(StoreSubmissionRequest $request)
    {
    }
    public function show(Submission $submission)
    {
    }
    public function edit(Submission $submission)
    {
        return view('form-monitor-berkas-edit', [
            'submission' => $submission,
        ]);
    }
    public function update(UpdateSubmissionRequest $request, Submission $submission)
    {
        $data = $request->validated();
        $submission->update($data);
        return to_route('web.customer.show', ['customer' => $submission->customer]);
    }
    public function destroy(Submission $submission)
    {
    }
}
