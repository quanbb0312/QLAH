<?php

namespace App\Http\Requests;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
        $customer_id = Customer::all()->pluck('id')->toArray();
        $product_id = Product::all()->pluck('id')->toArray();
        return [
            'customer_id' => ['required', 'in:'.implode(',', $customer_id)],
            'product_id' => ['required', 'in:'.implode(',', $product_id)],
            'date_at' => ['required', 'date'],
            'note' => ['required', 'min:3', 'max:200'],
            'quantity' => ['required', 'numeric', 'min:1', 'max:1000'],
        ];
    }
}
