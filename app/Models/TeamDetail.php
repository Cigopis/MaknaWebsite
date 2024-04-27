<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
    protected $primaryKey = 'team_detail_id';
    protected $guarded = ['team_detail_id'];

    public function detailTeam(){
        return $this->hasMany(Team::class, 'team_id', 'team_id');
    }
}
