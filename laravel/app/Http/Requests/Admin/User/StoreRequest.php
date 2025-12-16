<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Заполните это поле',
            'name.string' => 'Это поле должно иметь строковый тип данных',
            'email.required' => 'Заполните это поле',
            'email.string' => 'Это поле должно иметь строковый тип данных',
            'email.email' => 'Ваша почта должна соответствовать формату user@user.com',
            'email.unique' => 'Пользовкатель с таким email уже существует',
            'password.required' => 'Заполните это поле',
            'password.string' => 'Это поле должно иметь строковый тип данных',
        ];
    }
}
