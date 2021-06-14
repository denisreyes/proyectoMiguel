<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    //relacion de uno a muchos
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
