<?php

namespace App\Http\Controllers;

use App\Events\CustomerRejected;
use App\Events\CustomerVerificated;
use App\Http\Requests\StoreCustomerVerificationRequest;
use App\Http\Requests\UpdateCustomerVerificationRequest;
use App\Models\Customer;
use App\Models\CustomerVerification;

class CustomerVerificationController extends Controller
{
    public function index()
    {
        return view('verifpelanggan', [
            'customer_verifications' => CustomerVerification::all(),
        ]);
    }
    public function create()
    {
        //
    }
    public function store(StoreCustomerVerificationRequest $request)
    {
        $data = $request->validated();
        /** @var CustomerVerification */
        $customer_verification = CustomerVerification::create($data);
        return back();
    }
    public function show(CustomerVerification $customer_verification)
    {
        //
    }
    public function edit(CustomerVerification $customer_verification)
    {
        //
    }
    public function update(UpdateCustomerVerificationRequest $request, CustomerVerification $customer_verification)
    {
        //
    }
    public function destroy(CustomerVerification $customer_verification)
    {
        $customer_verification->delete();
        CustomerRejected::dispatch($customer_verification);
        return to_route('web.customer_verification.index');
    }
    public function verified(CustomerVerification $customer_verification)
    {
        /** @var Customer */
        $customer = Customer::create($customer_verification->toArray());
        $customer_verification->delete();
        CustomerVerificated::dispatch($customer_verification, $customer);
        return to_route('web.customer.index', ['service_type' => $customer->service_type_id]);
    }
}
