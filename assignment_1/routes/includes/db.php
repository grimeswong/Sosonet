<?php
/*
 *  Purpose: This file is the functions to the access post and its comments in sqlite database
 *  
 */

    // Get all the updated posts
    function getPosts() {
        $sql = "select * from post order by post.post_id desc;";
        $posts = DB::select($sql);
        return $posts;
    }
    
    // Get post by id
    function getPostByid($post_id) {
        $sql ="select * from post where post_id = ?;";
        $posts = DB::select($sql, array($post_id));
        if(count($posts) !=1){
            die("Something has gone wrong, invalid query or result: $sql");
        }
        $post = $posts[0];
        return $post;
    }
    
    // Get all the updated comments
    function getComments() {
        $sql = "select post.post_id, count(comment.com_post_id) as counter from post left join comment on post.post_id = comment.com_post_id group by post.post_id order by post.post_id desc;";    // use left join
        $comments = DB::select($sql);
        return $comments;
    }
    
    // Get Comments by the posts id 
    function getCommentsByid($post_id) {
        $sql = "select * from comment where comment.com_post_id = ?;";
        $comments = DB::select($sql, array($post_id));
        return $comments;
    }
    
    // Add post to database
    function add_post($name, $title, $message) {
        $sql = "Insert into post (title, message, name) values (?, ?, ?);"; //setup sql query to variable
        DB::insert($sql, array($title, $message, $name));
        $post = DB::getPdo()->lastInsertId(); // store last id in variable
        return $post;
    }
    
    // Edit post and save to database
    function update_post($post_id, $title, $message, $name) {
        $sql = "update post set title = ?,  message = ?, name = ? where post_id = ?;"; //setup sql query to variable
        DB::update($sql, array($title, $message, $name, $post_id));
    }
    
    // Delete post and related comment(s) from database
    function delete_post($post_id) {
        $sql = "delete from comment where com_post_id = ?;";
        $code = DB::delete($sql, array($post_id));
        $sql = "delete from post where post_id = ?;";
        $testcode = DB::delete($sql, array($post_id));
    }
    
    // Add comment to the current post
    function add_comment($post_id, $message, $name) {
        $sql = "Insert into comment (com_post_id, message, name) values (?, ?, ?);";
        DB::insert($sql, array($post_id, $message, $name));
        $comment_id = DB::getPdo()->lastInsertId();
        return $comment_id;
    }
    
    // Delete comment by the comment id
    function delete_comment($comment_id) {
        $sql = "delete from comment where comment_id = ?" ;
        DB::delete($sql, array($comment_id));
    }
    
    // Get Post by comment id
    // Return: post_id 
    function getPostbyCommentid($comment_id) {
        $sql = "select com_post_id from comment where comment_id = ?;";
        $posts_id= DB::select($sql, array($comment_id));
        $post_id = $posts_id[0]->com_post_id;
        // dd($post_id);
        return $post_id;
    }
    
?>