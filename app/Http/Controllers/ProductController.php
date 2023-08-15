<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $pro = Product::get();
        return view('admin.product.list', compact('pro'));
    }
    public function list()
    {
        $pro = Product::get();
        return view('admin.product.list', compact('pro'));
    }

    public function add()
    {
        $cat = Category::get();
        return view('admin.product.add', compact('cat'));
    }

    public function save(Request $request)
    {
        $pro = new Product();
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
    public function edit($id)
    {
        $cat = Category::get();
        $pro = Product::where('productID', '=', $id)->first();
        return view('admin.product.edit', compact('pro', 'cat'));
    }
    public function update(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Product::where('productID', '=', $request->id)->update([
            'productName' => $request->name,
            'productPrice' => $request->price,
            'productImage' => $img,
            'productDetails' => $request->details,
            'catID' => $request->category
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}
