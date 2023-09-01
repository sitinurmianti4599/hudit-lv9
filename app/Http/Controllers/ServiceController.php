<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\File;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('form-layanan-tambah', [
            'service_types' => ServiceType::all(),
            'files' => File::all(),
        ]);
    }
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        /** @var Service */
        $service = Service::create($data);
        $service->files()->sync($data['files']);

        return to_route('web.data_master.showlayanan');
    }
    public function show(Service $service)
    {
        //
    }
    public function edit(Service $service)
    {
        return view('form-layanan-edit', [
            'service' => $service,
            'service_types' => ServiceType::all(),
            'files' => File::all(),
        ]);
    }
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        /** @var Service */
        $service->update($data);
        $service->files()->sync($data['files']);

        return to_route('web.data_master.showlayanan');
    }
    public function destroy(Service $service)
    {
        $service->files()->detach();
        $service->delete();

        return to_route('web.data_master.showlayanan');
    }
}
