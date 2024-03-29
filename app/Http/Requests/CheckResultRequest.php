<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckResultRequest extends FormRequest
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
            'id' => 'required|string|exists:customers,registration',
        ];
    }

    public function messages()
    {
        return [
            'id.exists' => 'Kode Registrasi Tidak Terdaftar.',
            'id.required' => 'Kode Registrasi Tidak Boleh Kosong.',
        ];
    }
}
