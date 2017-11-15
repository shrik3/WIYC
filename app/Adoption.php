<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    //
    public function comments(){
        return $this->hasMany('App\Comment','adoption_id','id');
    }
}
