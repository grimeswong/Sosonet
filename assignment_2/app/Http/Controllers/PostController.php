<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;           
use App\Comment;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::query()->orderBy('id','desc')->get();    //get all the posts by reserve order
        // $comments = Comment::all();
        $commentsCount = Post::withCount('Comments')->get();
        // dd($commentsCount);
        
        /***To do  Need to find out how to count comments ***/
       
        return view('posts.index')->withPosts($posts)->with('commentsCount', $commentsCount)->with('users', User::all());  // magic method
        // ->withComments($comments)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not using this part
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
            'user_id' =>'exists:users,id',
            'title'=>'required|max:255|min:1',
            'message'=>'required|max:255|min:1',
            'privacy' => 'required'
        ]);
        // dd($request);
        $post = new Post();
        $post->title = $request->title;
        $post->message = $request->message;
        $post->user_id = $request->user_id;
        $post->privacy = $request->privacy;
        $post->save();
        
        if($post) {
            return redirect('/post');
        } else {
            die("Error to save a post");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $user = USER::find($post->user_id);
        return view('/posts.edit_form')->withPost($post)->with('user', $user);
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
          /** Input validation **/
        $this->validate($request, [
            // 'name' =>'required|max:255|min:1',
            // post user id validation
            'user_id' =>'exists:users,id',
            'title'=>'required|max:255|min:1',
            'message'=>'required|max:255|min:1',
            'privacy' => 'required'
        ]);
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->message = $request->message;
        $post->user_id = $request->user_id;
        $post->privacy = $request->privacy;
        $post->save();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Delete all the post and its comments */
        $post = Post::find($id);
        $comments = Post::find($id)->comments()->get();
        
        foreach($comments as $comment) {    // Delete all the comments related to this post
            $comment->delete();
        }
        $post->delete();                    // Delete post itself
        if($post) {
            return redirect('/post');
        }
    }
    
}
