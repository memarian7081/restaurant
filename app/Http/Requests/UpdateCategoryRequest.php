<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'discount' => 'nullable|numeric|between:1,100',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'نام الزامی است.',
            'name.max' => 'حداکثر کاراکتر 255 است.',
            'name.string' => 'نام باید ز نوع رشته باشد',
            'description.max' => 'حداکثر کاراکتر وارد شده 255 است',
            'image.image' => 'نوع فایل وارد شده باید یکی از موارد باشد: jpeg, png, jpg, gif, svg',
            'image.max' => 'حداکثر حجم وارد شده 2 مگابایت است.',
            'discount.numeric' => 'تخفیف باید از نوع عدد وارد شود',
            'discount.between' => 'درصد تخفیف باید بین 1 تا 100 وارد شود.',
        ];
    }
}
