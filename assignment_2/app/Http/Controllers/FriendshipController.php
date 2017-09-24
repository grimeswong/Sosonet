<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \Auth;


class FriendshipController extends Controller
{
    /**
     * Display a listing of the friends.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /*** Check friendship ***/
        $id = Auth::id(); 
        $userfriend = User::find($id)->userfriend()->get();
        $friendof = User::find($id)->friendof()->get();
        $friendships = $userfriend->merge($friendof);
        return view('friends.index')->withFriendships($friendships);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $user = Auth::user();
        $friend = User::find($request->id);
        
        $user->userfriend()->attach($friend->id);
        $user->friendof()->attach($friend->id);
        
        return redirect("/friend");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the friendship of users.
     *
     * @param  int  $id (user id)
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $user = Auth::user();
        $friend = User::find($id);
        
        $user->userfriend()->detach($friend->id);       // Remove friend from user' list (user's friend)
        
        // $friend->userfriend()->detach($user->id);    // This is equivalent with below
        $user->friendof()->detach($friend->id);         // Remove user from friend's list (friend's list)
        
        return redirect("/friend");
    }
}
