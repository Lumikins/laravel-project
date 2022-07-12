<?php

namespace App\Models;

// use App\Models\Image;
// use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // public function search($request){
    //   if ($filters['search'] ?? false) {
    //     $query->where('name', 'like', '%' . request('search') . '%')
    //       ->orWhere('description', 'like', '%' . request('search') . '%');
    //   }
    // }

    // each product can only have one category and one image
    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function image(){
      return $this->hasOne(Image::class);
    }

    // relationship to user
    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }

    // public static function showAll(){
    //   return [
    //     [
    //       'id' => 1,
    //       'name' => 'Product 1',
    //       'description' => 'my first product'
    //     ]
    //   ];
    // }

    // public static function showSingle($id){
    //   $products = self::showAll();

    //   foreach($products as $product){
    //     if($product['id'] == $id) {
    //       return $product;
    //     }
    //   }
    // }
}