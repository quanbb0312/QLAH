<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='categories';
    protected $fillable = ['catName', 'catSlug', 'catDescriptions', 'catSubID', 'catParentID'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
