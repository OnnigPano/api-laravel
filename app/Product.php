<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'price', 'description', 'featured', 'image', 'category_id', 'brand_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
