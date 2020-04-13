<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'interest'
    ];
    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}