<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
