<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; // Tên bảng trong CSDL

    protected $fillable = ['id', 'name', 'phone', 'email', 'password', 'address']; // Các trường cho phép fillable

    // Các phương thức hoặc liên kết đến các đơn hàng (nếu có)
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }
}
