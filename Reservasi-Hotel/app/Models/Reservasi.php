<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = "reservasi";
    protected $fillable = ['nama','ruang','lantai',];
}
