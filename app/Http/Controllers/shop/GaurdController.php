<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerSendMailRequest;
use App\Http\Requests\GuardRegisterRequest;
use App\Jobs\SendEmail;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaurdController extends Controller
{
    //register customer
    public function register(GuardRegisterRequest $request)
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
    public function login(CustomerLoginRequest $request)
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

    //send mail
    public function sendMail(CustomerSendMailRequest $request) {
        $email = $request->email;
        $customer = Customer::where('email', $email)->first();
        $password = rand(100000,999999);
        if ($email && $customer) {
            $data=[
                'type'=> 'Chào bạn,',
                'task'=>'Bạn',
                'content'=>'đã gửi yêu cầu lấy lại mật khẩu tài khoản!',
                'note'=>'Dưới đây là mật khẩu của bạn. Không chia sẽ mật khẩu với người khác!
                <br><br>Mật khẩu: '.$password.'<br>'
            ];
            SendEmail::dispatch($data,$email)->delay(now()->addMinute());

            $customer->password = bcrypt($password);
            $customer->save();
            return response()->json(200);
        } else {
            return response()->json(400);
        }
    }
}
