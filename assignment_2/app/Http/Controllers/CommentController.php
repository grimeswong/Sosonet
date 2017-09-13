<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;           
use App\Comment;
use App\User;

class CommentController extends Controller
{
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
            /* check existing user id */
            'user_id' =>'exists:users,id',
            'message'=>'required|max:255|min:1'
        ]);
        
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->message = $request->message;
        $comment->save();
        
        $post = Post::find($request->post_id);
        $comments = Post::find($request->post_id)->comments()->get();
        return view('comments.index')->withPost($post)->withComments($comments)->with('users', User::all());
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
        $comments = Post::find($id)->comments()->get();
        return view('comments.index')->withPost($post)->withComments($comments)->with('users', User::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        
        $post = Post::find($request->post_id);
        $comments = Post::find($request->post_id)->comments()->get();
        if($comment) {
            return view('comments.index')->withPost($post)->withComments($comments)->with('users', User::all());
        } else {
            die("Error for deleting a comment!!!");
        }
    }
}
