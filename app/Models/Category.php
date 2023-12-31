<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable = ['catName', 'catSlug', 'catDescriptions', 'catImage'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('catName', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
