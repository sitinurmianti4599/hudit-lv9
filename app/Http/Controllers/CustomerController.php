<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(ServiceType|null $service_type)
    {
        $customers = [];
        if ($service_type->id) {
            $customers = Customer::where('service_type_id', $service_type->id)->get();
        } else {
            $customers = Customer::all();
        }
        return view('pelanggan', [
            'customers' => $customers,
        ]);
    }
    public function create()
    {
        return view('form-berkas-tambah', [
            'services' => Service::all(),
            'service_types' => ServiceType::all(),
        ]);
    }
    public function store(StoreCustomerRequest $request)
    {
        $data = $request->validated();
        /** @var Customer */
        $file = Customer::create($data);

        return to_route('web.data_master.index');
    }
    public function show(Customer $file)
    {
        //
    }
    public function edit(Customer $file)
    {
        return view('form-berkas-edit', [
            'file' => $file,
        ]);
    }
    public function update(UpdateCustomerRequest $request, Customer $file)
    {
        $data = $request->validated();
        /** @var Customer */
        $file->update($data);

        return to_route('web.data_master.index');
    }
    public function destroy(Customer $file)
    {
        $file->delete();

        return to_route('web.data_master.index');
    }
}
