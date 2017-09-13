<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include "includes/defs.php";    // File for check input validation functions
include "includes/db.php";      // File for access database functions


/*** Routes ***/

/*** Index Page ***/
Route::get('/', function () {
    $posts = getPosts();
    $comments = getComments();
    $error = "";
    $name = "";
    $title = "";
    $message = "";
    return view('pages.index')->withPosts($posts)->withComments($comments)->withError($error)->withName($name)->withTitle($title)->withMessage($message);
});

/*** Add post action ***/
Route::post('add_post_action', function(){
    $name = request('name');
    $title = request('title');
    $message = request('message');
    $post_id = request('post_id');
    
    /* Check input validation */
    $error = checkPostForm($name, $title, $message);
    if(!empty($error))
    {
        /* Query the database pass to the view */
        $posts = getPosts();
        $comments = getComments();
        return view('pages.index')->withPosts($posts)->withComments($comments)->withError($error)->withName($name)->withTitle($title)->withMessage($message);
    } 
    
    $post = add_post($name, $title, $message);
    if($post) {
        return redirect('/');
    } else {
        die("Error to add a post!!!");
    }
});

/*** Update post page ***/
Route::get('update_post/{post_id}', function($post_id){
    $post = getPostByid($post_id);
    return view('pages.update_post')->withPost($post);
});

/*** Update post action ***/
Route::post('update_post_action', function(){
    $post_id = request('post_id');
    $name = request('name');
    $title = request('title');
    $message = request('message');
    
      /* Check input validation */
    $error = checkPostForm($name, $title, $message);
    if(!empty($error))
    {
        /* Query the database pass to the view */
        $post = getPostByid($post_id);
        return view('pages.update_post')->withPost_id($post_id)->withPost($post)->withError($error)->withName($name)->withTitle($title)->withMessage($message);
    } 
    
    update_post($post_id, $title, $message, $name);
    $post = getPostByid($post_id);
    $comments = getCommentsByid($post_id);
    $name = "";
    $message = "";
     if($post) {
        return view('pages.view_comment')->withPost($post)->withComments($comments)->withName($name)->withMessage($message);;
    } else {
        die("Error to update a post!!!");
    }
});

/*** View Comment page ***/
Route::get('view_comment/{post_id}', function($post_id){
    $post = getPostByid($post_id);
    $comments = getCommentsByid($post_id);
    $name = "";
    $message = "";
    return view('pages.view_comment')->withPost($post)->withComments($comments)->withName($name)->withMessage($message);
});

/*** Delete post ***/
Route::get('delete_post/{post_id}', function($post_id){
    delete_post($post_id);
    return redirect('/');
});

/*** Add comment action ***/
Route::post('add_comment_action', function(){
    $post_id = request('post_id');
    $message = request('message');
    $name = request('name');
    
    /* Check input validation */
    $error = checkCommentForm($name, $message);
    if(!empty($error))
    {
        /* Query the database pass to the view */
        $post = getPostByid($post_id);
        $comments = getCommentsByid($post_id);
        return view('pages.view_comment')->withPost($post)->withComments($comments)->withError($error)->withName($name)->withMessage($message);
    } 
    
    
    add_comment($post_id, $message, $name);
    $post = getPostByid($post_id);
    $comments = getCommentsByid($post_id);
    $name = "";
    $message = "";
    return view('pages.view_comment')->withPost($post)->withComments($comments)->withName($name)->withMessage($message);
    
});

/*** Delete comment ***/
Route::get('delete_comment/{comment_id}', function($comment_id){
    $post_id = getPostbyCommentid($comment_id);
    // dd($post_id);
    delete_comment($comment_id);
    $post = getPostByid($post_id);
    $comments = getCommentsByid($post_id);
    $name = "";
    $message = "";
    return view('pages.view_comment')->withPost($post)->withComments($comments)->withName($name)->withMessage($message);
});

/*** Documentation Page ***/
Route::get('documentation', function() {
    return view('pages.doc');
});

/*** ER Diagram Page ***/
Route::get('erdiagram', function() {
    return view('pages.erdiagram');
});

