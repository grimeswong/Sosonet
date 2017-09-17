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
    
    
    function posts() {
        return $this->hasMany('App\Post');
    }
    
    
    function comments() {
        return $this->hasMany('App\Comment');
    }
    
    
    function userfriend() {
        return $this->belongsToMany('App\User', 'friendships','user_id', 'friend_user_id')->withPivot('friend_user_id');
    }
    
    
    function friendof() {
        return $this->belongsToMany('App\User', 'friendships','friend_user_id', 'user_id')->withPivot('user_id');
    }
}
