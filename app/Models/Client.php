<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //relacion uno a muchos

    public function sales(){
        return $this->hasMany('App\Models\Sales');
    }
}
