<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $paginate = 8;

    public function list()
    {
        $products = Product::search()->paginate($this->paginate);
        return view('admin.product.list', compact('products'));
    }

    public function add()
    {
        $cat = Category::get();
        return view('admin.product.add', compact('cat'));
    }

    public function save(ProductStoreRequest $request)
    {
        $pro = new Product();
        $pro->productName = $request->productName;
        $pro->productSlug = $request->productSlug;
        $pro->productPrice = $request->productPrice;
        $pro->productDetails = $request->productDetails;
        $pro->productQuantity = $request->productQuantity;
        $pro->category_id = $request->category_id;
        $file = $request->image;
        if ($request->hasFile('image')) {
            $fileExtension = $file->getClientOriginalName();
            $fileName = time(); // create file name by curent time
            $newFileName = $fileName . '.' . $fileExtension; //45678908766.jpg
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('image')->storeAs('public/products', $newFileName);
            // Gán trường image của đối tượng task với tên mới
            $pro->productImage = $newFileName;
        }
        try {
            $pro->save();
            return redirect()->back()->with('success', 'Product added successfully!');
        } catch (\Exception $th) {
            $image = 'public/products/' . $pro->image;
            Storage::delete($image);
            return redirect()->back();
        }
    }
    public function delete($id)
    {
        $checkproductinorder = OrderDetail::where('product_id', $id)->first();
        if ($checkproductinorder) {
            return redirect()->back()->with('error', 'You can not delete this product because it is already have a product in order.');
        }
        $pro = Product::FindOrFail($id);
        $image = 'public/products/' . $pro->productImage;
        Storage::delete($image);
        $pro->delete();
        return redirect()->back()->with('success', 'Product delete successfully!');
    }
    public function edit($id)
    {
        $cat = Category::get();
        $pro = Product::where('id', '=', $id)->first();
        return view('admin.product.edit', compact('pro', 'cat'));
    }
    public function update($id, ProductUpdateRequest $request)
    {
        $product = Product::find($id);
        $product->productName = $request->productName;
        $product->productSlug = $request->productSlug;
        $product->productPrice = $request->productPrice;
        $product->productDetails = $request->productDetails;
        $product->productQuantity = $request->productQuantity;
        $product->category_id = $request->category_id;
        $oldImg = $product->productImage;
        $file = $request->new_image;
        if ($request->hasFile('new_image')) {
            $fileExtension = $file->getClientOriginalName();
            $fileName = time(); // create file name by curent time
            $newFileName = $fileName . '.' . $fileExtension; //45678908766.jpg
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('new_image')->storeAs('public/products', $newFileName);
            // Gán trường image của đối tượng task với tên mới
            $product->productImage = $newFileName;
        }
        try {
            $product->save();
            if ($request->hasFile('new_image')) {
                $image = 'public/products/' . $oldImg;
                Storage::delete($image);
            }
            return redirect()->back()->with('success', 'Product updated successfully!');
        } catch (\Exception $th) {
            if ($request->hasFile('new_image')) {
                $image = 'public/products/' . $newFileName;
                Storage::delete($image);
            }
            return redirect()->back();
        }
    }
}
