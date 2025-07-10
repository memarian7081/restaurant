<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:25',
            'description' => 'nullable|string|max:255',
            'discount' => 'nullable|numeric|between:1,100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'وارد کردن نام دسته الزامی است',
            'name.max' => 'نام وارد شده بیش از حد مجاز است',
            'name.string' => 'فیلد وارد شده مورد قبول نیست',
            'description.max' => 'توضیحات خیلی طولانی است',
            'description.string' => 'توضیحات وارد شده قابل قبول نیست',
            'discount.numeric' => 'تخفیفات وارد شده از نوع عدد باید باشد',
            'discount.between' => 'درصد تخفیف بین 1 تا  باید باشد100',
            'image.image' => '',
            'image.mimes' => 'نوع فرمت وارد شده قابل قبول نیست: jpeg, png, jpg',
            'image.max' => 'حجم عکس وارد شده خیلی بالا است',


        ];
    }
}
