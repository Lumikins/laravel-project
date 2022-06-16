<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // each product can only have one category and one image
    public function category(){
        return $this->hasOne(Category::class);
        return $this->hasOne(Image::class);
    }
}
