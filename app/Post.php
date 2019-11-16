<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
    * Get donations for Post
    */
    public function donations(){
        return $this->hasMany('App\Donation');
    }
}
