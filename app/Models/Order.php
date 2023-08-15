<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; // Tên bảng trong CSDL

    protected $fillable = ['id', 'customer_id', 'order_date', 'total_amount']; // Các trường cho phép fillable

    // Các phương thức hoặc liên kết đến khách hàng (nếu có)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public $timestamps = false;
}
