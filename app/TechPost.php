<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechPost extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'tech_category_id', 'tags', 'photo',
    ];

    public function tech_category(){
        return $this->belongsTo('App\TechCategory');
    }


}
