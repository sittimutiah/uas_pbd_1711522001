<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jorong extends Model
{
    use HasFactory;

    protected $table = "jorong";
    public $timestamps = false;

    public function nagari(){
    	return $this->belongsTo('App\Models\nagari');
    }

    public function kartu_keluargas(){
        return $this->hasMany('App\Models\kartu_keluarga');
    }
}
