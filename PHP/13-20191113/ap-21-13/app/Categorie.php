<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function Post(){
        return $this->belongsToMany('App\Post');
    }
}
