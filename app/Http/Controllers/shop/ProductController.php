<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProductOfCategory() {
        return view('shop.product.product-of-category');
    }
}
