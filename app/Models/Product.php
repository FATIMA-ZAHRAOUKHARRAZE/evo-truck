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

     public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
