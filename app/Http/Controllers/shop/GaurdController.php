<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaurdController extends Controller
{
    //register customer
    public function register(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password = bcrypt($request->password);
        $customer->save();
        return response()->json(200);
    }

    //login customer
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('customers')->attempt($credentials)) {
            return response()->json(200);
        } else {
            return response()->json(400);
        }
    }

    //logout customer
    public function logout()
    {
        Auth::guard('customers')->logout();
        return redirect()->route('dashboad');
    }
}
