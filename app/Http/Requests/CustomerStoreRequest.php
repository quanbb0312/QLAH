<?php

namespace App\Http\Requests;

use Closure;
use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'max:50',],
            'phone' => ['required', 'min:10', 'max:11', 'unique:customers',],
            'email' => ['required', 'email','min:11','max:50','unique:customers'],
            'address' => ['required', 'min:3', 'max:200'],
            'password' => ['required', 'min:3', 'max:200'],
        ];
    }
}
