<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $primaryKey = 'sISBN'; // or null

    public $incrementing = false;

    public function comments(){
        return $this->hasMany('App\Comment' , 'sISBN' , 'id');
    }
}
