<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function sales(){
        return $this->hasMany('App\Models\Sales');
    }
    //relacion uno a muchos inveersa
    public function provider(){
        return $this->belongsTo('App\Models\Provider');
    }
}
