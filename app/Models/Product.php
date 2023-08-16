<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "products";

    protected $fillable = ['productName','productSlug','productPrice','productDetails','productImage','category_id ','productQuantity'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
