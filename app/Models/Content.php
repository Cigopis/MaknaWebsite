<?php

namespace App\Models;

use App\Models\CategoryContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $primaryKey = 'content_id';
    protected $guarded = ['content_id'];

    public function categoryContent(){
        return $this->hasMany(CategoryContent::class, 'category_content_id', 'category_content_id');
    }
}
