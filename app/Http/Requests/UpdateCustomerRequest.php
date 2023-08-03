<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'name' => 'required|string',
            'address' => 'required|string',
            'job' => 'required|string',
            'telp' => 'required|string',
            'progress' => 'nullable|integer|min:0|max:100',
            'status' => 'nullable|in:pending,progress,done',
            'order_date' => 'nullable|date',
            'done_date' => 'nullable|date',
            // 'service_id' => 'nullable|uuid|exists:services,id',
            // 'service_type_id' => 'nullable|image|size:4096',
        ];
    }
}
