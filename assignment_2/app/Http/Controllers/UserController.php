<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Datetime;
use \Auth;
use \DB;

class UserController extends Controller
{   
    
    /*** Allow guest user navigate index page only ***/
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'searchresult', 'show']]);
    }
    
    /**
     * Display a listing of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        return view("users.index")->withUsers($users);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create_form");
    }

    /**
     * Store a new user resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** Input validation **/
        $this->validate($request, [
            // post user id validation
            'fullname' =>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:4|confirmed',
            'DOB' => 'required|date',
            'image' => 'required|image|max:255' // image
        ]);
        
        $image_store = request()->file('image')->store('user_img','public');
        $user = new User();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->DOB = $request->DOB;
        $user->image = $image_store;
        $user->save();
    }

    /**
     * Display the user profile page.
     *
     * @param  int  $id (User id)
     * @return \Illuminate\Http\Response
     */
    public function show($id)   //param: user id
    {   
        if(Auth::guest()) {
            // $posts = Post::whereRaw('id = ? and privacy = "public" or privacy = "friends"', array("%$id%"))->orderBy('id','desc')->get();
            $posts = User::find($id)->posts()->whereRaw('privacy = "public"')->orderBy('id','desc')->get();   // only posts allow guest to see
        }elseif (Auth::id() != $id) {
            $posts = User::find($id)->posts()->whereRaw('NOT privacy = "private"')->orderBy('id','desc')->get();
            // dd($posts);
        }else{  // the authenticated user browse his own profile
            $posts = User::find($id)->posts()->orderBy('id','desc')->get();
        }
        
        $user = User::find($id);    // may not need this
        
        /*** Calculate the user age ***/
        $birth_date = new DateTime(User::find($id)->DOB);
        // $birth_date = new \DateTime($user->DOB);    //if not put "use DATETIME" on the top
        $diff = $birth_date->diff(new DateTime);
        $age = $diff->y;
        // Must use $user in case some user may not have any post
        
        /*** Check friendship ***/
        $userfriend = User::find($id)->userfriend()->get();
        $friendof = User::find($id)->friendof()->get();
        $friendships = $userfriend->merge($friendof);
        
        return view('users.profile')->withUser($user)->withAge($age)->withPosts($posts)->with('friendships', $friendships);
    }

    /**
     * Show the form for editing the user account.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = Auth::user()->fullname;
        $date = new DateTime(Auth::user()->DOB);
        return view('users.edit_form')->withUser($user)->withDate($date);
    }

    /**
     * Update the user details in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         /** Input validation **/
        $this->validate($request, [
            // post user id validation
            'fullname' =>'required|max:255',
            'email'=>'required|email|max:255|',
            // 'password'=>'required|min:4|confirmed',
            'DOB' => 'required|date',
            'image' => 'required|image|max:255' // image
        ]);
        
        $image_store = request()->file('image')->store('user_img','public');
        $user = User::find($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->DOB = $request->DOB;
        $user->image = $image_store;
        $user->save();
        
        return redirect('/');
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
    
    
    /**
     * display the searching result of users
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchresult(Request $request)
    {   
        $name = $request->name;
        $users = User::whereRaw('fullname like ?', array("%$name%"))->get();
        return view('users.searchresult')->withUsers($users);
    }
    
    
    // public function addFriend(Request $request) 
    // {
    //     dd($request);
    // }
    
    
    // public function removeFriend(Request $request) 
    // {
    //     dd($request);
    // }
}
