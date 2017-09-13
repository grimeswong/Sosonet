<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['title', 'message', 'privacy'];
    
    
    /*** this function for the relationship between Posts and Comments that Posts can have many Commnets ***/
    function comments() {
        return $this->hasMany('App\Comment');
    }
    
    /*** this function for the relationship between Posts and Users that a Post belongs only one of a User  ***/
    function user() {
        return $this->belongsTo('App\User');
    }
}
