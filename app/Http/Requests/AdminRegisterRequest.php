<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRegisterRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:50'],
            'email' => ['required', 'email', 'min:11', 'max:50', 'unique:users'],
            'password' => ['required', 'min:3', 'max:200'],
            'photo' => ['required', 'mimes:jpg,bmp,png'],
            'password_confirmation' => ['required', 'min:3', 'max:200']
        ];
    }
}
