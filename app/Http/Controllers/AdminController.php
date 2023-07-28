<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function list()
    {
        $pro = Product::get();
        return view('admin.product-list', compact('pro'));
    }

    public function add()
    {
        $cat = Category::get();
        return view('admin.product-add', compact('cat'));
    }
}
