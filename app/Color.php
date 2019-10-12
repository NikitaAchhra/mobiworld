<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'Color';
    public $primary = 'id';

    public function products(){
        return $this->belongsToMany('App\products');
    }
}
