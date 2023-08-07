<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.index');
    }

    public function login()
    {
        if (session::has('adminsID')) {
            session::pull('adminsID');
        }
        return view('admin.login');
    }


    public function loginProcess(Request $request)
    {
        $admin = Admin::where('adminsID', '=', $request->Username)->first();
        if ($admin) {
            if ($admin->adminPass == $request->password) {
                $request->session()->put('adminsID', $admin->adminsID);
                $request->session()->put('adminName', $admin->adminFullname);
                $request->session()->put('adminsID', $admin->adminsID);
                $request->session()->put('adminPhoto', $admin->adminPhoto);
                session::put('adminsID', $admin->adminsID);
                return redirect('admin/index');
            } else {
                return back()->with('fail', 'Incorrect password!!!');
            }
        } else {
            return back()->with('fail', 'Username is invalid!!!');
        }
    }

    public function logout()
    {
        Session::pull('adminsID');
        Session::pull('adminName');
        Session::pull('adminPhoto');
        return redirect('admin/login');
    }

    public function list()
    {
        $pro = Product::get();
        return view('admin.product-list', compact('pro'));
    }



    public function add()
    {
        $cat = Category::get();
        return view('admin.product-add', compact('cat'));
    }
}
