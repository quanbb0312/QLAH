<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;

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
        Category::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('admin.category.edit', compact('category'));
    }
    public function showCategories()
    {
        $categories = Category::all();
        return view('category-list', compact('categories'));
    }

    public function update($id, CategoryUpdateRequest $request)
    {

        $category = Category::find($id);
        $category->catName =  $request->catName;
        $category->catSlug =  $request->catSlug;
        $category->catDescriptions =  $request->catDescriptions;
        $oldImg = $category->catImage;
        $file = $request->new_image;
        if ($request->hasFile('new_image')) {
            $fileExtension = $file->getClientOriginalName();
            $fileName = time();
            $newFileName = $fileName . '.' . $fileExtension;
            $request->file('new_image')->storeAs('public/categoryImage', $newFileName);
            $category->catImage = $newFileName;
        }
        try {
            $category->save();
            if ($request->hasFile('new_image')) {
                $image = 'public/categoryImage/' . $oldImg;
                Storage::delete($image);
            }
            return redirect()->back()->with('success', 'Category updated successfully!');
        } catch (\Exception $th) {
            if ($request->hasFile('new_image')) {
                $image = 'public/categoryImage/' . $newFileName;
                Storage::delete($image);
            }
            return redirect()->back();
        }
    }
}
