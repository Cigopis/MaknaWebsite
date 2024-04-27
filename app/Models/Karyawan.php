<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
   protected $primaryKey = 'karyawan_id';
   protected $guarded = ['karyawan_id'];
}
