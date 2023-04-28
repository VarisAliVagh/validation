<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name is required',
            'name.max' => 'only 10 character allowed in name',
            'email.required' => 'Email is required!',
            'email.email' => 'invalid email address',
            'email.unique' => 'email address already taken',
            'password' => 'Password is required!',
        ];
    }
}
