<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'photo' => 'nullable|image|max:2048',
            'name' => 'required|string|max:256|unique:users,name',
            'fullname' => 'required|string|max:256',
            'telp' => 'required|string|max:256|unique:users,name',
            'email' => 'required|email|max:256|unique:users,name',
            'address' => 'required|string|max:256',
            'date_of_birth' => 'required|date|max:256',
            'password' => 'required|string|max:256',

            'role_id' => 'required|uuid|exists:roles,id',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'tidak boleh kosong.',
            'unique' => 'telah terpakai.',
        ];
    }
}
