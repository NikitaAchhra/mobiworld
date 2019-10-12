<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    public $primary = 'product_id';

    public function colors(){
        return $this->belongsToMany('App\Colors');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    } 
}
