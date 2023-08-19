<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table = 'customers'; // Tên bảng trong CSDL

    protected $guard = 'customers';

    protected $fillable = ['id', 'name', 'phone', 'email', 'password', 'address']; // Các trường cho phép fillable

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Các phương thức hoặc liên kết đến các đơn hàng (nếu có)
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' . $key . '%')
            ->orwhere('email', 'like', '%' . $key . '%')
            ->orwhere('phone', 'like', '%' . $key . '%')
            ->orwhere('address', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
