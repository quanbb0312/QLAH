<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminChangePasswordRequest extends FormRequest
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
            'email' => ['required', 'email','min:11','max:50'],
            'oldPassword' => ['required', 'min:3', 'max:200'],
            'newPassword' => ['required', 'min:3', 'max:200'],
            'confirmPassword' => ['required', 'min:3', 'max:200']
        ];
    }
}
