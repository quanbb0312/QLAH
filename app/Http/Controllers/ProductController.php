<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('product-list', compact('data'));
    }

    public function add()
    {
        $cat = Category::get();
        return view('product-add', compact('cat'));
    }

    public function save(Request $request)
    {
        $pro = new Product();
        $pro->productID = $request->id;
        $pro->productName = $request->name;
        $pro->productPrice = $request->price;
        $pro->productImage = $request->image;
        $pro->productDetails = $request->details;
        $pro->catID = $request->category;
        $pro->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }
    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product delete successfully!');
    }
}
