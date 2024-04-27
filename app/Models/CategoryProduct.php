<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
   protected $primaryKey = 'category_product_id';
   protected $guarded = ['category_product_id'];
}
