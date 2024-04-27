<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoProduct extends Model
{
    protected $primaryKey = 'photo_product_id';
    protected $guarded = ['photo_produt_id'];

    public function photoProduct(){
        return $this->hasMany(Products::class, 'product_id','product_id');
    }
}
