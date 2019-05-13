<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartUpCategory extends Model
{
    //
    public function start_ups(){
        return $this->hasMany('App\StartUp');
    }
}
