<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exemplary extends Model
{
    use HasFactory;
    public function book(){
        return $this->belongsTo('App\Models\book');
    }
    //Relacion muchos a muchos
        public function ExemplaryUser(){
          return $this->belongsToMany('App\Models\exemplary_user');
      }

}
