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
            'photo' => 'nullable|image|max:2048',
            'name' => 'sometimes|string|max:256|unique:users,name,'.request()->route('user')->id,
            'fullname' => 'sometimes|string|max:256',
            'telp' => 'sometimes|string|max:256|unique:users,name,'.request()->route('user')->id,
            'email' => 'sometimes|email|max:256|unique:users,name,'.request()->route('user')->id,
            'address' => 'sometimes|string|max:256',
            'date_of_birth' => 'sometimes|date|max:256',
            'password' => 'sometimes|string|max:256',
    
            'role_id' => 'sometimes|uuid|exists:roles,id',
        ];
    }
}
