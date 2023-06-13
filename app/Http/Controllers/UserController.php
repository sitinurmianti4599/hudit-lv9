<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('form-akun-tambah', [
            'roles' => Role::all(),
        ]);
    }
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);

        return to_route('web.data_master.index');
    }
    public function show($id)
    {
        //
    }
    public function edit(User $user)
    {
        return view('form-akun-edit', [
            'roles' => Role::all(),
            'user' => $user,
        ]);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return to_route('web.data_master.index');
    }
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return to_route('web.data_master.index');
    }
}
