<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechCategory extends Model
{
    //
    protected $guarded = [];

    public function tech_posts(){
        return $this->hasMany('App\TechPost');
    }
}
