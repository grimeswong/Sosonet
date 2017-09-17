<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use \Auth;


class FriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // dd($id);
        $userfriend = User::find($id)->userfriend()->get();
        $friendof = User::find($id)->friendof()->get();
        $friendships = $userfriend->merge($friendof);
        foreach($friendships as $friendship) {
            if($friendship->id == Auth::id()){
                // $friendship->delete();   // Got problem when deleting it
            }
        }
        return redirect("/friend");
    }
}
