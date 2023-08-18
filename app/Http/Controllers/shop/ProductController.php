<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $paginate = 8;
    public function listProductOfCategory($id)
    {
        $listCategory = Category::all();
        $listProduct = Product::where('category_id', $id)->paginate($this->paginate);
        return view('shop.product.product-of-category', compact('listProduct', 'listCategory'));
    }
}
