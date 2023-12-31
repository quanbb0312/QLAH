<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboadController extends Controller
{
    public function index()
    {
        $listCategory = Category::all();

        $keyboards = Category::where('id', 4)->with('products')->first();
        $screens = Category::where('id', 3)->with('products')->first();
        return view('shop.dashboard', compact('listCategory', 'keyboards', 'screens'));
    }

    public function checkGuard()
    {
        if (Auth::guard('customers')->user() != null) {
            return response()->json(200);
        }
        return response()->json(400);
    }
}
