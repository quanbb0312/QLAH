<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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
        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác.');
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
        try {
            $user->save();
            return redirect()->route('adminLogin')->with('success', 'Successful account registration!!!');
        } catch (\Exception $th) {
            $image = 'public/images/' . $user->image;
            Storage::delete($image);
            return redirect()->back()->with('error', 'Account registration failed!!!');
        }
    }

    //show view confirm email
    public function showViewEmail() {
        return view('admin.auth.confirm-email');
    }

    //send mail
    public function sendMail(Request $request) {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $password = rand(100000,999999);
        if ($email && $user) {
            $data=[
                'type'=> 'Chào bạn,',
                'task'=>'Bạn',
                'content'=>'đã gửi yêu cầu lấy lại mật khẩu tài khoản !',
                'note'=>'Dưới đây là mật khẩu của bạn. Không chia sẽ mật khẩu với người khác.
                Hãy nhanh chóng đổi mật khẩu để tăng bảo mật cho tài khoản!
                <br><br>Mật khẩu: '.$password.'<br>'
            ];
            SendEmail::dispatch($data,$email)->delay(now()->addMinute());

            $user->password = bcrypt($password);
            $user->save();
            return redirect()->route('show-change-password')->with('success', 'Password sent to your email successfully!!');
        } else {
            return redirect()->back()->with('error', 'email is not correct');
        }
    }

    ///show view change password
    public function showViewChangePassword(Request $request) {
        return view('admin.auth.change-password');
    }

    //change password
    public function changePassword(Request $request) {
        $email = $request->email;
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $confirmPassword = $request->confirmPassword;
        $user = User::where('email', $email)->first();
        if ($user) {
            if ($newPassword == $confirmPassword) {
                if (Hash::check($oldPassword, $user->password)) {
                    $user->password = bcrypt($newPassword);
                    $user->save();
                    return redirect()->route('adminLogin')->with('success', 'Change password successfully!!');
                }
            } else {
                return redirect()->back()->with('error', 'Confirm password is not correct');
            }
        } else {
            return redirect()->back()->with('error', 'email is not correct');
        }
    }
}
