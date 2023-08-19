<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
        $categories_id = Category::all()->pluck('id')->toArray();
        return [
            'productName' => ['required', Rule::unique('products')->ignore($this->id), 'min:3'],
            'productSlug' => ['required', Rule::unique('products')->ignore($this->id), 'min:3'],
            'productPrice' => ['required', 'min:10000', 'max:1000000000', 'numeric'],
            'productDetails' => ['required', 'min:3', 'max:200'],
            'new_image' => [],
            'productQuantity' => ['required', 'numeric', 'min:1', 'max:1000'],
            'category_id' => ['required', 'numeric', 'in:'.implode(',', $categories_id)],
        ];
    }
}
