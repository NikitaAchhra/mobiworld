<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'Review';
    public $primary = 'id';

    public function user(){
        return $this->belongsToMany('App\User');
    } 

    public function products(){
        return $this->belongsToMany('App\products');
    }
}
