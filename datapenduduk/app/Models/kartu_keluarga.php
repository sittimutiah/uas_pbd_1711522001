<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_keluarga extends Model
{
    use HasFactory;

    protected $table = "kartu_keluarga";
    public $timestamps = false;

    public function jorong(){
    	return $this->belongsTo('App\Models\jorong');
    }

    public function penduduk(){
        return $this->hasMany('App\Models\penduduk');
    }
}
