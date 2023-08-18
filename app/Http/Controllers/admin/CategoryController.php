<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $paginate = 5;

    public function add()
    {
        return view('admin.category.add');
    }

    public function save(Request $request)
    {
        $category = new Category();
        $category->catName = $request->catName;
        $category->catSlug = $request->catSlug;
        $category->catDescriptions = $request->catDescriptions;
        $category->catSubID = $request->catSubID;
        $category->catParentID = $request->catParentID;
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


    public function update($id, Request $request)
    {

        $category = Category::find($id);
        $category->catName =  $request->catName;
        $category->catSlug =  $request->catSlug;
        $category->catDescriptions =  $request->catDescriptions;
        $category->catSubID =  $request->catSubID;
        $category->catParentID =  $request->catParentID;
        $category->save();
        // Category::where('catID', '=', $request->id)->update([
        //     'catName' => $request->catName,
        //     'catSlug' => $request->catSlug,
        //     'catDescriptions' => $request->catDetail,
        //     'catSubID' => $request->catSubID,
        //     'catParentID' => $request->catParentID
        // ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }
    public function list()
    {
        $categories = Category::paginate($this->paginate);
        return view('admin.category.list', compact('categories'));
    }
}
