<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseImages extends Model
{
    //
//    protected $table="house_images";


    public function house() {
        return $this->belongsTo('App\House');
    }
}
