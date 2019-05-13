<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartUp extends Model
{
    //
    // protected $fillable = [
    //     'title', 'content', 'start_up_category_id', 'tags', 'photo',
    // ];

    protected $guarded = [];

    public function start_up_category(){
        return $this->belongsTo('App\StartUpCategory');
    }
}
