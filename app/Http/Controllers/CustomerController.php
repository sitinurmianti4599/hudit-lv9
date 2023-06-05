<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = Customer::query();
        $service_type_id = $request->query('service_type');
        if ($service_type_id) {
            $query = $query->where('service_type_id', $service_type_id);
        }
        return view('pelanggan', [
            'customers' => $query->orderBy('name', 'asc')->get(),
        ]);
    }
    public function create()
    {
        return view('form-pelanggan-tambah', [
            'service_types' => ServiceType::all(),
        ]);
    }
    public function store(StoreCustomerRequest $request)
    {
        $data = $request->validated();
        /** @var Customer */
        $customer = Customer::create($data);

        return to_route('web.customer.index');
    }
    public function show(Customer $customer)
    {
        return view('detail-pelanggan', [
            'customer' => $customer,
        ]);
    }
    public function edit(Customer $customer)
    {
        return view('form-pelanggan-edit', [
            'customer' => $customer,
            'service_types' => ServiceType::all(),
        ]);
    }
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();
        if ($customer->service_id != $data['service_id']) {
            return back()->withErrors(['service_id' => 'cannot change']);
        }
        $customer->update($data);
        return to_route('web.customer.index');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return to_route('web.customer.index');
    }
}
