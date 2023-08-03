<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'photo' => 'nullable|image|max:20480',
            'name' => 'required|string|max:256|unique:users,name,'.request()->route('user')->id,
            'fullname' => 'required|string|max:256',
            'telp' => 'required|string|max:256|unique:users,telp,'.request()->route('user')->id,
            'email' => 'required|email|max:256|unique:users,email,'.request()->route('user')->id,
            'address' => 'required|string|max:256',
            'date_of_birth' => 'required|date|max:256',
            'password' => 'nullable|string|max:256',

            'role_id' => 'required|uuid|exists:roles,id',
        ];
    }
}
