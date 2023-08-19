<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = ['productName', 'productSlug', 'productPrice', 'productDetails', 'productImage', 'category_id ', 'productQuantity'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id');
    }

    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
