<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index() {
        $listCategory = Category::all();
        return view('shop.dashboad', compact('listCategory'));
    }
}
