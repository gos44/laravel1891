<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public function Exemplary(){
        return $this->hasMany('App\Models\Exemplary');
    }
}
