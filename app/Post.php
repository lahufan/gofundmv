<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
            'id',
            'severity',
            'status',
            'info',
            'goal',
            'raised',
            'user_id',
    ];
    /**
    * Get donations for Post
    */
    public function donations(){
        return $this->hasMany('App\Donation');
    }
}
