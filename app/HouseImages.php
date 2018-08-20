<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseImages extends Model
{
    //

    public function houses() {
        return $this->belongsTo('App\House');
    }
}
