<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $role = Role::where([
            'position' => 'person_responsible',
        ])->first();
        return view('form-berkas-tambah', [
            'users' => User::where('role_id', $role->id)->get(),
        ]);
    }
    public function store(StoreFileRequest $request)
    {
        $data = $request->validated();
        /** @var File */
        $file = File::create($data);

        return to_route('web.data_master.showberkas');
    }
    public function show(File $file)
    {
        //
    }
    public function edit(File $file)
    {
        $role = Role::where([
            'position' => 'person_responsible',
        ])->first();
        return view('form-berkas-edit', [
            'file' => $file,
            'users' => User::where('role_id', $role->id)->get(),
        ]);
    }
    public function update(UpdateFileRequest $request, File $file)
    {
        $data = $request->validated();
        /** @var File */
        $file->update($data);

        return to_route('web.data_master.showberkas');
    }
    public function destroy(File $file)
    {
        $file->delete();

        return to_route('web.data_master.showberkas');
    }
}
