<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function pictures() {
        return $this->hasMany('App\Models\Picture');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
