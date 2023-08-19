<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerUpdateRequest extends FormRequest
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
            'phone' => ['required', 'min:10', 'max:10', Rule::unique('customers')->ignore($this->id),],
            'email' => ['required', 'email','min:11','max:50',Rule::unique('customers')->ignore($this->id),],
            'address' => ['required', 'min:3', 'max:200'],
        ];
    }
}
