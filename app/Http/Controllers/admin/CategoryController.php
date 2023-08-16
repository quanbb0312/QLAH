<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('admin.category.list', compact('cate'));
    }

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
        $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
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
        $category = Category::all();
        return view('admin.category.list', compact('category'));
    }
}
