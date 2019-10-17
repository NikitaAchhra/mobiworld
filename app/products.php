<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    public $primary = 'id';

    protected $fillable = [
        'product_name', 'product_type', 'company', 
        'Model', 'Launch_date', 'price',
        'description', 'image', 'video_url'
    ];


    public function colors(){
        return $this->belongsToMany('App\Colors');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    } 
}
