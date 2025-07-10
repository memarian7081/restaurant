<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublisherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:25|unique:publishers',
            'logoSide' => 'nullable|image|max:20',
            'address' => 'required|string|max:200',
            'phone' => 'required|string|max:15',
            'fax' => 'nullable|string|max:15',
            'description' => 'nullable|string|max:1000',
            'isArchive' => 'nullable|integer',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The Publisher name is required.',
            'name.string' => 'The Publisher name must be a string.',
        ];
    }
}
