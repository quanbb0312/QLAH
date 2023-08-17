<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //get view cart
    public function list()
    {
        return view('shop.cart');
    }

    public function listCart()
    {
        $cart = session()->get('cart', []);
        return response()->json($cart);
    }

    //add to cart
    public function storeCart(Request $request)
    {
        // session()->forget('cart');
        $id = $request->id;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'nameVi' => $product->productName,
                'quantity' => 1,
                'price' => $product->productPrice,
                'image' => $product->productImage,
                'max' => $product->productQuantity,
            ];
        }
        session()->put('cart', $cart);
        $data = [];
        $data['cart'] = session()->has('cart');
        return response()->json($data);
    }

    //update cart
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;

            $totalAllCart = 0;
            $TotalAllRefreshAjax = 0;
            $count = 0;
            foreach ($cart as $id => $details) {
                $count++;
                $totalAllCart = $details['price'] * $details['quantity'];
                $TotalAllRefreshAjax += $totalAllCart;
            }
            session()->put('cart', $cart);
            $data = [
                'status' => 'cập nhật thành công',
                'count' => '' . $count,
                'TotalAllRefreshAjax' => '' . $TotalAllRefreshAjax,
            ];
            return response()->json($data);
        }
    }

    //remove cart
    public function removeCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            $data = session()->get('cart');
            return response()->json($data);
        }
    }

    //get view checkout
    public function checkout()
    {
    }

    //checkout
    public function payment()
    {
    }
}
