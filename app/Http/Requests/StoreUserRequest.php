<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:50|min:5',
            'userName' => 'required|string|max:50|min:5|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'phone' => 'nullable|unique:users|regex:/^([0-9]{11})$/',
            'role' => 'required|in:admin,user,guest',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'ورود نام الزامی است',
            'name.max' => 'حداکثر طول نام وارد شده نباید بیشتر از 50 کاراکتر باشد',
            'name.min' => 'حداقل کاراکتر وارد شده 5 است',
            'name.string' => 'فیلد های واد شده باید از نوع رشته باشد',
            'userName.required' => 'نام کاربری الزامی است',
            'userName.max' => 'حداکثر کاراکتر وارد شده 50 است',
            'userName.min' => 'حداقل کاراکتر وارد شده5 است',
            'userName.string' => 'نام کاربی از نوع رشته باید وارد شود',
            'userName.unique' => 'نام کاربری وارد شده قبلا استفاده شده است',
            'email.required' => 'ایمیل اجباری است',
            'email.max' => 'حداکثر طول ایمیل50 است',
            'email.email' => 'فیلد وارد شده از نو ایمیل باید باشد',
            'email.unique' => 'ایمیل وارد شده قبلا استفاده شده است',
            'password.required' => 'پسورد وارد شده الزامی است',
            'password.min' => 'حداقل کااکتر وارد شده 4 است',
            'password.string' => 'پسورد باید از نوع رشته باشد',
            'password.confirmed' => 'پسورد با تکرار همخوانی ندارد',
            'phone.unique' => 'تلفن وارد شده قبلا استفاده شده است',
          'phone.regex' => 'کاراکتر وارد شده باید از نوع عدد باشد و 11 فیلد باید باشد'

        ];
    }
}
