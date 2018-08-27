<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //


    public function user() {
        return $this->belongsTo('App\User','user_id');
//        return $this->belongsTo('App\User');
    }
//    public $table="houses" ;
    public function house_images(){
        return $this->hasMany('App\HouseImages','house_id','id');
//        return $this->hasMany('App\HouseImages');
    }

}
