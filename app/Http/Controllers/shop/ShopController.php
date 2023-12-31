<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckOutRequest;
use App\Jobs\SendEmail;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    protected $paginate = 8;
    public function getViewPayment()
    {
        $carts = session()->get('cart', []);
        return view('shop.payment', compact('carts'));
    }

    public function checkOut(CheckOutRequest $request)
    {
        $id = Auth::guard('customers')->user()->id;
        $customer = Customer::find($id);
        if ($customer) {
            //update info customer
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->save();

            $cart = session()->get('cart', []);
            if ($cart != []) {
                $total = 0;
                foreach ($cart as $key => $product) {
                    $sum = $product['quantity'] * $product['price'];
                    $total += $sum;
                }
                //add order
                $order = new Order();
                $order->customer_id = $customer->id;
                $order->date_at = date('Y-m-d H:i:s');
                $order->total = $total;
                if ($request->note != null) {
                    $order->note = $request->note;
                }
                $order->save();

                //add order details
                foreach ($cart as $key => $product) {
                    $orderItem = new OrderDetail();
                    $orderItem->order_id =  $order->id;
                    $orderItem->product_id = $product['id'];
                    $orderItem->quantity = $product['quantity'];
                    $orderItem->total = $product['quantity'] * $product['price'];
                    $orderItem->save();
                    session()->forget('cart');
                    Product::where('id', '=', $orderItem->product_id)->decrement('productQuantity', $orderItem->quantity);
                }
                return response()->json(200);
            } else {
                return response()->json(401);
            }
        } else {
            return response()->json(400);
        }
    }

    public function history()
    {
        $id = Auth::guard('customers')->user()->id;
        $data = Customer::join('orders', 'customers.id', '=', 'orders.customer_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select(
                'products.productName',
                'products.productPrice',
                'products.productImage',
                'order_details.quantity',
                'order_details.total',
                'order_details.created_at',
                'customers.id',
                'orders.id'
            )->where('customers.id', '=', $id)
            ->orderby('orders.id', 'DESC')
            ->get();
        return view('shop.history', compact('data'));
    }

    public function search(Request $request)
    {
        $listCategory = Category::all();
        $listProduct = Product::query();
        $key = '';
        if ($request->filter && $request->filter != '') {
            switch ($request->filter) {
                case '1':
                    $listProduct->where('productPrice', '<=', 1000000);
                    break;
                case '1to3':
                    $listProduct->where(function ($query) {
                        $query->where('productPrice', '<=', 1000000)
                            ->orWhere('productPrice', '>', 1000000)
                            ->where('productPrice', '<=', 3000000);
                    });
                    break;
                case '3to5':
                    $listProduct->whereBetween('productPrice', [3000000, 5000000]);

                    break;
                case '5to10':
                    $listProduct->whereBetween('productPrice', [5000000, 10000000]);
                    break;
                case '10':
                    $listProduct->where('productPrice', '>', 10000000);
                    break;
            }
        }

        if ($request->key != "") {
            $listProduct = $listProduct->where('productName', 'like', '%' . $request->key . '%');
            $key = $request->key;
        }
        $listProduct = $listProduct->paginate($this->paginate);
        return view('shop.product.product-list-search', compact('listProduct', 'listCategory', 'key'));
    }
}
