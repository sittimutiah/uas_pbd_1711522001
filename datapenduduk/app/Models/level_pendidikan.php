<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level_pendidikan extends Model
{
    use HasFactory;

    protected $table='level_pendidikan';
    public $timestamps = false;

    public function penduduk(){
        return $this->hasMany('App\Models\penduduk');
    }
}
