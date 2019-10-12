<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'Photo';
    public $primary = 'id';

    public function products(){
        return $this->belongToMany('App\products');
    }

}
