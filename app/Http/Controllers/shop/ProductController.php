<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $paginate = 8;
    public function listProductOfCategory($id, Request $request)
    {
        $listCategory = Category::all();
        $listProduct = Product::where('category_id', $id);
        if ($request->filter) {
            switch ($request->filter) {
                case '1':
                    $listProduct->where('productPrice', '<', 1000000);
                    break;
                case '1to3':
                    $listProduct->where(function ($query) {
                        $query->where('productPrice', '<=', 1000000)
                            ->orWhere('productPrice', '>', 1000000)
                            ->where('productPrice', '<=', 3000000);
                    });
                    break;
                    break;
                case '3to5':
                    $listProduct->whereBetween('productPrice', [3000000, 5000000]);
                    break;
                case '5to10':
                    $listProduct->whereBetween('productPrice', [5000000, 10000000]);
                    break;
                case '10':
                    $listProduct->where('productPrice', '>=', 10000000);
                    break;
            }
        }

        $listProduct = $listProduct->paginate($this->paginate);
        // dd($listProduct);
        return view('shop.product.product-of-category', compact('listProduct', 'listCategory', 'id', 'request'));
    }

    public function detail($id) {
        $listCategory = Category::all();
        $product = Product::findOrFail($id);
        $listProductOfCate = Product::where('category_id',$product->category_id)->get();
        return view('shop.product.product-detail', compact('product', 'listCategory', 'listProductOfCate'));
    }
}
