<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $primaryKey = 'testimoni_id';
    protected $guarded = ['testimoni_id'];

    public function testimoniProduct(){
        return $this->hasMany(Product::class, 'product_id', 'product_id');
    }
}
