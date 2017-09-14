<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Datetime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        return view("users.index")->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          /** Input validation **/
        $this->validate($request, [
            // 'name' =>'required|max:255|min:1',
            // post user id validation
            'fullname' =>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:4|confirmed',
            'DOB' => 'required|date',
            'image' => 'required|max:255' // image
        ]);
        
        $user = new User();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->DOB = $request->DOB;
        $user->image = $request->image;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $posts = User::find($id)->posts;
        $commentsCount = Post::withCount('Comments')->get();
        // dd($commentsCount);
        $user = User::find($id);
        $birth_date = new DateTime($user->DOB);
        // $birth_date = new \DateTime($user->DOB);    //if not put "use DATETIME" on the top
        $diff = $birth_date->diff(new \DateTime);
        $age = $diff->y;
        return view('users.profile')->withUser($user)->withAge($age)->withPosts($posts)->with('commentsCount', $commentsCount);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    public function searchresult(Request $request)
    {   
        $name = $request->name;
        $users = User::whereRaw('fullname like ?', array("%$name%"))->get();
        return view('users.searchresult')->withUsers($users);
    }
}
