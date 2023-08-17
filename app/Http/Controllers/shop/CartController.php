<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //get view cart
    public function list() {
        return view('shop.cart');
    }

    //add to cart
    public function storeCart() {
        
    }

    //update cart
    public function updateCart() {
        
    }

    //remove cart
    public function removeCart() {
        
    }

    //get view checkout
    public function checkout() {
        
    }

    //checkout
    public function payment() {
        
    }
}
