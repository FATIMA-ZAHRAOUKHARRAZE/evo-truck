<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     public function Category()
    {
        return $this->hasMany(Category::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'product_id'); 
    }
}
