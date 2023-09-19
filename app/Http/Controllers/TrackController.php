<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckResultRequest;
use App\Models\ServiceType;

use App\Models\Customer;

class TrackController extends Controller
{
    public function check()
    {
        return view('cek' , [
            'service_types' => ServiceType::all(),
        ]);
        
    }

    public function result(CheckResultRequest $request)
    {
        $data = $request->validated();
        /** @var Customer */
        $customer = Customer::where('registration', $data['id'])->first();

        return view('result', [
            'customer' => $customer,
        ]);
    }
}
