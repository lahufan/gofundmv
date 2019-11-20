<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    /**
     * Get the post that owns the Post
     */
    public function post(){
        return $this-> belongsTo('App\Post');
    }
}
