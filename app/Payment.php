<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'Payment';
    public $primary = 'id';

    public function user(){
        return $this->belongsToMany('App\User');
    } 

    public function products(){
        return $this->belongsToMany('App\products');
    }


}
