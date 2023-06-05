<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubmissionRequest extends FormRequest
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
            'proof' => 'nullable|image|size:4096',
            'status' => 'required|in:pending,progress,done',
            'date' => 'required|date',
            'done' => 'nullable|date',
            'information' => 'nullable|string',
            // 'customer_id',
            // 'file_id',
        ];
    }
}
