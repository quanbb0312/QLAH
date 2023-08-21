<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryStoreRequest extends FormRequest
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
            'catName' => ['required', 'unique:categories', 'min:3', 'max:50'],
            'catSlug' => ['required', 'unique:categories', 'min:3', 'max:50'],
            'catDescriptions' => ['required', 'min:3', 'max:50'],
            'catImage' => ['required', 'mimes:jpg,bmp,png,webp'],
        ];
    }
}
