<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;           
use App\Comment;
use App\User;

class CommentController extends Controller
{
    /*** Allow guest user navigate index page only ***/
    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show']]);
        return view('posts.index');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a new comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             /** Input validation **/
        $this->validate($request, [
            /* check existing user id */
            'user_id' =>'exists:users,id',
            'message'=>'required|max:255|min:1'
        ]);
        // dd($request);
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->message = $request->message;
        $comment->save();
        
        $post = Post::find($request->post_id);
        $comments = Post::find($request->post_id)->comments()->paginate(6);
        return redirect("/comment/$post->id")->withPost($post)->withComments($comments)->with('users', User::all());
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
        $comments = Post::find($id)->comments()->paginate(6);
            // $ = Comments::find($post->id); find the way to find users (shortlisted)
        return view('comments.index')->withPost($post)->withComments($comments)->with('users', User::all()); // need to get all the user for list the users in the form
        
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
     * Remove the comment from storage and reload the updated comments for this post.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        
        $post = Post::find($request->post_id);
        $comments = Post::find($request->post_id)->comments()->paginate(6);
        if($comment) {
            return redirect("/comment/$post->id")->withPost($post)->withComments($comments)->with('users', User::all());
        } else {
            die("Error for deleting a comment!!!");
        }
    }
}
