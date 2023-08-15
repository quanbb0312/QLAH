<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    protected $redirectTo = 'admin.index';

    // Điều hướng sau khi đăng nhập thành công

    public function __construct()
    {
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        }

        return back()->withInput($request->only('email'))->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }


    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminLogin');
    }

    //lấy view Đăng kí
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    //Đăng ký
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $file = $request->photo;
        // dd($request->hasFile('photo'));
        if ($request->hasFile('photo')) {
            $fileExtension = $file->getClientOriginalName();
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('photo')->storeAs('public/images', $fileExtension);
            // Gán trường image của đối tượng task với tên mới
            $user->photo = $fileExtension;
        }
        // dd($user);
        try {
            $user->save();
            return redirect()->route('adminLogin')->with('success', 'Đăng ký thành công.');
        } catch (\Exception $th) {
            $image = 'public/images/' . $user->image;
            Storage::delete($image);
        }
    }
}
