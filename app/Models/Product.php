<?php

namespace App\Models;

use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $guarded = ['product_id'];

    public function categoryProduct(){
        return $this->hasMany(CategoryProduct::class, 'category_product_id','category_product_id');
    }
}
