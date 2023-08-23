<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function list() {
        $users = User::search()->paginate();
        return view('admin.user.list', compact('users'));
    }

    public function add() {
        return view('admin.user.add');
    }

    public function save(UserStoreRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $file = $request->photo;
        if ($request->hasFile('photo')) {
            $fileExtension = $file->getClientOriginalName();
            $fileName = time(); // Tạo tên file dựa trên thời gian
            $newFileName = $fileName . '.' . $fileExtension; // Tên file mới
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('photo')->storeAs('public/images', $newFileName);
            // Gán trường image của đối tượng task với tên mới
            $user->photo = $newFileName;
        }
        try {
            $user->save();
            return redirect()->route('user-add')->with('success', 'Successful account registration!!!');
        } catch (\Exception $th) {
            $image = 'public/images/' . $user->image;
            Storage::delete($image);
            return redirect()->back()->with('error', 'Account registration failed!!!');
        }

    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update($id, UserUpdateRequest $request) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $oldImg = $user->photo;
        $file = $request->new_image;
        if ($request->hasFile('new_image')) {
            $fileExtension = $file->getClientOriginalName();
            $fileName = time(); // Tạo tên file dựa trên thời gian
            $newFileName = $fileName . '.' . $fileExtension; // Tên file mới
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('new_image')->storeAs('public/images', $newFileName);
            // Gán trường image của đối tượng task với tên mới
            $user->photo = $newFileName;
        }
        try {
            $user->save();
            if ($request->hasFile('new_image')) {
                $image = 'public/images/' . $oldImg;
                Storage::delete($image);
            }
            return redirect()->back()->with('success', 'User updated successfully!');
        } catch (\Exception $th) {
            dd($th);
            if ($request->hasFile('new_image')) {
                $image = 'public/images/' . $newFileName;
                Storage::delete($image);
            }
            return redirect()->back()->with('error', 'User updated failed!!!');
        }
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $image = 'public/images/' . $user->photo;
        Storage::delete($image);
        $user->delete();
        return redirect()->back()->with('success', 'User delete successfully!');
    }
}
