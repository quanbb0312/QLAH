<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    protected $paginate = 8;

    public function add()
    {
        return view('admin.category.add');
    }
    public function list()
    {
        $categories = Category::search()->paginate($this->paginate);
        return view('admin.category.list', compact('categories'));
    }

    public function save(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->catName = $request->catName;
        $category->catSlug = $request->catSlug;
        $category->catDescriptions = $request->catDescriptions;
        $file = $request->catImage;
        if ($request->hasFile('catImage')) {
            $fileExtension = $file->getClientOriginalExtension(); // Lấy phần mở rộng của file (vd: jpg, png)
            $fileName = time(); // Tạo tên file dựa trên thời gian
            $newFileName = $fileName . '.' . $fileExtension; // Tên file mới
            // Lưu file vào thư mục storage/app/public/categoryImage với tên mới
            $request->file('catImage')->storeAs('public/categoryImage', $newFileName);
            // Gán trường catImage của đối tượng category với tên mới
            $category->catImage = $newFileName;
        }
        try {
            $category->save();
            return redirect()->back()->with('success', 'Category added successfully!');
        } catch (\Exception $th) {
            $image = 'public/categoryImage/' . $category->catImage;
            Storage::delete($image);
            return redirect()->back()->with('error', 'An error occurred while adding category.');
        }
    }

    public function delete($id)
    {
        // check xem sản phẩm có thuộc danh mục hay không
        $checkproduct = Product::where('category_id', $id)->first();
        if ($checkproduct) {
            return redirect()->back()->with('error', 'You can not delete this category because it is already have product.');
        }
        $category = Category::FindOrFail($id);
        $image = 'public/categoryImage/' . $category->catImage;
        Storage::delete($image);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('admin.category.edit', compact('category'));
    }

    public function update($id, CategoryUpdateRequest $request)
    {

        $category = Category::find($id);
        $category->catName =  $request->catName;
        $category->catSlug =  $request->catSlug;
        $category->catDescriptions =  $request->catDescriptions;
        $oldImg = $category->catImage;  // Lưu giữ tên tệp ảnh hiện tại của danh mục
        $file = $request->new_image;  // Lấy thông tin về tệp ảnh mới từ yêu cầu

        if ($request->hasFile('new_image')) {  // Kiểm tra xem yêu cầu có chứa tệp ảnh mới hay không
            $fileExtension = $file->getClientOriginalName();  // Lấy phần mở rộng của tên tệp
            $fileName = time();  // Tạo một tên tệp mới dựa trên thời gian
            $newFileName = $fileName . '.' . $fileExtension;  // Kết hợp tên và phần mở rộng để tạo tên tệp mới
            $request->file('new_image')->storeAs('public/categoryImage', $newFileName);  // Lưu trữ tệp ảnh mới trong thư mục 'categoryImage'
            $category->catImage = $newFileName;  // Cập nhật tên tệp ảnh mới cho danh mục
        }

        try {
            $category->save();  // Lưu thay đổi của danh mục vào cơ sở dữ liệu

            if ($request->hasFile('new_image')) {  // Nếu có tệp ảnh mới
                $image = 'public/categoryImage/' . $oldImg;  // Xác định đường dẫn đến tệp ảnh cũ
                Storage::delete($image);  // Xóa tệp ảnh cũ
            }

            return redirect()->back()->with('success', 'Category update successfully!');  // Chuyển hướng về trang trước với thông báo thành công
        } catch (\Exception $th) {
            if ($request->hasFile('new_image')) {  // Nếu có tệp ảnh mới
                $image = 'public/categoryImage/' . $newFileName;  // Xác định đường dẫn đến tệp ảnh mới không thành công
                Storage::delete($image);  // Xóa tệp ảnh mới không thành công
            }

            return redirect()->back()->with('error', 'Category can not update!'); // Chuyển hướng về trang trước khi có lỗi xảy ra
        }
    }
}
