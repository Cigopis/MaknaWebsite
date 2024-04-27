<?php

namespace App\Models;

use App\Models\CategpryTeam;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $primaryKey = 'team_id';
    protected $guarded = ['team_id'];

    public function categoryTeam(){
        return $this->hasMany(CategoryTeam::class, 'category_team_id', 'category_team_id');
    }
}
