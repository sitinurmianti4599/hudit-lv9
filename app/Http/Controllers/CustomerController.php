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
        if (auth()->user()->role->position == 'person_responsible') {
            $query = $query->whereNot('status', 'done');
        }
        return view('pelanggan', [
            'service_type' => ServiceType::find($service_type_id),
            'customers' => $query->get(),
        ]);
    }
    public function service(Request $request)
    {
        $service_types = ServiceType::all();
        $stats = [];
        foreach ($service_types as $service_type) {
            $stat = new \stdClass();
            $stat->id = $service_type->id;
            $stat->name = $service_type->name;
            $stat->count = Customer::query()->where('service_type_id', $service_type->id)->count();
            $stats[] = $stat;
        }
        return view('pelayanan', [
            'stats' => $stats,
            'customers' => Customer::all(),
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
