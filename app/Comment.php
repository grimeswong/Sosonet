<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =['title', 'message'];
    
    /*** this function for the relationship between Comments and Post that Comment is belongs only one of a Post ***/
    function post() {
        return $this->belongsTo('App\Post');
    }
    
    /*** this function for the relationship between Comments and Users that a Comments belongs only one of a User  ***/
    function user() {
        return $this->belongsTo('App\User');
    }
}
