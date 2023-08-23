<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCartRequest;
use App\Http\Requests\RemoveCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //get view cart
    public function list()
    {
        return view('shop.cart');
    }

    public function listCart()
    {
        // Lấy nội dung giỏ hàng từ phiên, nếu không có thì sẽ trả về một mảng rỗng
        $cart = session()->get('cart', []);

        // Trả về một phản hồi JSON chứa nội dung giỏ hàng
        return response()->json($cart);
    }

    //add to cart
    public function storeCart(AddCartRequest $request)
    {
        // Lấy ID sản phẩm từ yêu cầu
        $id = $request->id;

        // Tìm kiếm sản phẩm theo ID (nếu không tìm thấy, ném ngoại lệ)
        $product = Product::findOrFail($id);

        // Lấy nội dung giỏ hàng từ phiên, nếu không có sẽ tạo một mảng rỗng
        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$id])) {
            // Nếu đã tồn tại, tăng số lượng sản phẩm trong giỏ hàng
            $cart[$id]['quantity']++;
        } else {
            // Nếu chưa tồn tại, thêm một mục mới vào giỏ hàng
            $cart[$id] = [
                'id' => $product->id,
                'nameVi' => $product->productName,
                'quantity' => 1,
                'price' => $product->productPrice,
                'image' => $product->productImage,
                'max' => $product->productQuantity,
            ];
        }

        // Lưu giỏ hàng đã cập nhật trở lại vào phiên
        session()->put('cart', $cart);

        // Tạo một mảng dữ liệu
        $data = [];

        // Kiểm tra xem giỏ hàng có tồn tại trong phiên hay không
        $data['cart'] = session()->has('cart');

        // Trả về một phản hồi JSON chứa dữ liệu giỏ hàng (true hoặc false)
        return response()->json($data);
    }

    //update cart
    public function updateCart(UpdateCartRequest $request)
    {
        // Kiểm tra xem có ID và quantity trong yêu cầu không
        if ($request->id && $request->quantity) {
            // Lấy nội dung giỏ hàng từ phiên
            $cart = session()->get('cart');

            // Cập nhật số lượng sản phẩm trong giỏ hàng dựa trên yêu cầu
            $cart[$request->id]["quantity"] = $request->quantity;

            // Khởi tạo các biến để tính tổng giá trị của giỏ hàng
            $totalAllCart = 0;
            $TotalAllRefreshAjax = 0;
            $count = 0;

            // Duyệt qua từng sản phẩm trong giỏ hàng
            foreach ($cart as $id => $details) {
                // Tăng biến đếm số lượng sản phẩm
                $count++;

                // Tính tổng giá trị của từng sản phẩm trong giỏ hàng
                $totalAllCart = $details['price'] * $details['quantity'];

                // Cộng tổng giá trị sản phẩm vào biến tổng cho cả giỏ hàng
                $TotalAllRefreshAjax += $totalAllCart;
            }

            // Lưu giỏ hàng đã cập nhật trở lại vào phiên
            session()->put('cart', $cart);

            // Tạo một mảng dữ liệu để trả về thông tin sau cập nhật
            $data = [
                'status' => 'cập nhật thành công',
                'count' => '' . $count,
                'TotalAllRefreshAjax' => '' . $TotalAllRefreshAjax,
            ];

            // Trả về một phản hồi JSON chứa thông tin sau cập nhật
            return response()->json($data);
        }
    }


    //remove cart
    public function removeCart(RemoveCartRequest $request)
    {
        // Kiểm tra xem có ID trong yêu cầu không
        if ($request->id) {
            // Lấy nội dung giỏ hàng từ phiên
            $cart = session()->get('cart');

            // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
            if (isset($cart[$request->id])) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($cart[$request->id]);

                // Cập nhật giỏ hàng sau khi xóa
                session()->put('cart', $cart);
            }

            // Lấy nội dung giỏ hàng sau khi xóa
            $data = session()->get('cart');

            // Trả về một phản hồi JSON chứa nội dung giỏ hàng sau khi xóa
            return response()->json($data);
        }
    }
}
