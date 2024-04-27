<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTeam extends Model
{
    protected $primaryKey = 'category_team_id';
    protected $guarded = ['category_team_id'];
}
