<?php

namespace App\Models;

use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoTestimoni extends Model
{
    protected $primaryKey = 'photo_testimoni_id';
    protected $guarded = ['photo_testimoni_id'];

    public function photoTestimoni(){
        return $this->hasMany(Testimoni::class,'testimoni_id','testimoni_id');
    }
}
