<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //

    public function house_images(){
        return $this->hasMany('App\HouseImages');
}

}
