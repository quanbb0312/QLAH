<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function list()
    {
        // Lấy danh sách đơn hàng từ CSDL và trả về view để hiển thị
        $order = Order::all();
        return view('admin.order.list', compact('order'));
    }

    public function add()
    {
        // Hiển thị view để thêm đơn hàng mới
        return view('admin.order.add');
    }

    public function save(Request $request)
    {
        $order = new Order();
        $order->id = $request->id;
        $order->customer_id  = $request->customer_id;
        $order->order_date = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->save();

        return redirect()->route('admin.order-list')->with('success', 'Order added successfully!');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.edit', compact('order'));
    }


    public function update(Request $request, $id)
    {
        // Xử lý cập nhật thông tin đơn hàng vào CSDL
        $order = Order::findOrFail($id);
        $order->customer_id = $request->customer_id;
        $order->order_date = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->save();

        return redirect()->route('admin.order.list')->with('success', 'Order updated successfully!');
    }

    public function delete($id)
    {
        // Xóa đơn hàng dựa trên $id từ CSDL
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.order.list')->with('success', 'Order deleted successfully!');
    }
}
