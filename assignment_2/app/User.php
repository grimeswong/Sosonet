<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'fullname', 'DOB', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // Get the user's posts
    function posts() {
        return $this->hasMany('App\Post');
    }
    
    // Get the user's comments
    function comments() {
        return $this->hasMany('App\Comment');
    }
    
    // Get the user's friends
    function userfriend() {
        return $this->belongsToMany('App\User', 'friendships','user_id', 'friend_user_id')->withPivot('friend_user_id');
    }
    
    // Get the friends of user
    function friendof() {
        return $this->belongsToMany('App\User', 'friendships','friend_user_id', 'user_id')->withPivot('user_id');
    }
}
