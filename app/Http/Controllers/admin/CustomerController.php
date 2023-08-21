<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    protected $paginate = 8;

    public function list()
    {
        // Lấy danh sách khách hàng từ CSDL và trả về view để hiển thị
        $customers = Customer::search()->paginate($this->paginate);
        return view('admin.customer.list', compact('customers'));
    }

    public function add()
    {
        // Hiển thị view để thêm khách hàng mới
        return view('admin.customer.add');
    }

    public function save(CustomerStoreRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password = bcrypt($request->password); //mã hoá passwords
        // Thêm các trường thông tin khác tương tự ở đây
        $customer->save();
        return redirect()->route('customer-list')->with('success', 'Customer added successfully!');
    }

    public function edit($id)
    {
        // Lấy thông tin khách hàng dựa trên $id từ CSDL
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(CustomerUpdateRequest $request, $id)
    {
        // Xử lý cập nhật thông tin khách hàng vào CSDL
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        // Cập nhật các trường thông tin khác tương tự ở đây
        $customer->save();

        return redirect()->route('customer-list')->with('success', 'Customer updated successfully!');
    }

    public function delete($id)
    {
        // Xóa khách hàng dựa trên $id từ CSDL
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer-list')->with('success', 'Customer deleted successfully!');
    }
}
