<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AuthController extends Controller
{
    public function login_show()
    {
        return view('login');
    }
    public function login_perfom(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::query()->where('name', $data['name'])->first();
        // $user->role->position == $data['role'];
        if ($user->name == $data['password']) {
            auth()->login($user, isset($data['remember']));
            session()->regenerate();

            return to_route('web.dashboard');
        } else {
            return back()->withErrors(['name' => ['username mismatch'], 'password' => ['password mismatch']]);
        }
    }
    public function logout_perfom()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return to_route('web.login.show');
    }
    public function profile()
    {
        /** @var User */
        $user = auth()->user();

        return view('profile', [
            'user' => $user,
        ]);
    }
    public function profile_edit()
    {
        /** @var User */
        $user = auth()->user();

        return view('form-profile-edit', [
            'user' => $user,
        ]);
    }
    public function profile_update(UpdateProfileRequest $request)
    {
        $data = $request->validated();
        /** @var User */
        $user = auth()->user();
        $user->update($data);

        return to_route('web.profile.show');
    }
}
