<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Events\CustomerVerificated;
use App\Models\CustomerVerification;


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
            $user = auth()->user();
            $query->whereNot('status', 'done')->with('submissions.file')->whereHas("submissions.file", function ($builder) use ($user) {
                $builder->where('user_id', $user->id);
            });
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
        $customer_verification = new CustomerVerification($data);
        CustomerVerificated::dispatch($customer_verification, $customer);
        return to_route('web.customer.index', ['service_type' => $customer->service_type_id]);

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
        $customer->update($data);
        return to_route('web.customer.show', ['customer' => $customer]);
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return to_route('web.customer.index', ['service_type' => $customer->service_type_id]);
    }
}
