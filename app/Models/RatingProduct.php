<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingProduct extends Model
{
    protected $primaryKey = 'rating_product_id';
    protected $guarded = ['rating_product_id'];

    public function ratingProduct(){
        return $this->hasMany(Product::class, 'product_id','product_id');
    }
}
