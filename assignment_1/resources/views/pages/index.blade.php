
@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="row">
        
        <!-- Form -->
        <div class="col-sm-4 form-border">
            <form method="post" action="/add_post_action">
                {{csrf_field()}}
                <div class="name form-group"><h2>Create Post Form</h2></div>
                
                <!-- Error message -->
                @if (!empty($error))
                    <p class="name error">Error: {{$error}}</p>
                @endif
                
                <div class="name">
                    <label>Name: </label><br>
                    <input type="text" name="name" value="{{$name}}" placeholder="Enter your name">
                </div>
                <div class="name"><label>Title: </label><br>
                    <input type="text" name="title" value="{{$title}}" placeholder="Enter a title">
                </div>
                <div class="message"><label>Message: </label><br>
                <textarea id="messagetextarea" name="message" rows="4" placeholder="Enter new message">{{$message}}</textarea>
                </div>
                <div class="message">
                    <button class="btn btn-warning" type="submit">Create new post</button>
                </div>
            </form>
        </div>
         <!-- End Form -->      
                
        <!-- Post -->
        <div class="col-sm-8">
            
            @forelse ($posts as $post)
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <img class="avatar" src= "/img/people-icon.png" alt="Image is not available"></img>
                    <span class="username">{{$post->name}}</span>
                    <a class="btn btn-danger btn-margin pull-right" href="{{url("delete_post/$post->post_id")}}">Delete</a>
                    <a class="btn btn-success btn-margin pull-right" href="{{url("update_post/$post->post_id")}}">Edit</a>
                </div>
                
                <div class="panel-body">
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->message}}</p>
                    <a class="btn btn-primary pull-right" href="{{url("view_comment/$post->post_id")}}">
                        View Comment
                        @foreach ($comments as $comment)
                            @if($comment->post_id == $post->post_id)
                                <span class="badge">{{$comment->counter}}</span>
                            @endif
                        @endforeach
                    </a>
                </div>
                
            </div>
            @empty 
                <h3 class="error-middle">No post found</h3>
            @endforelse
            
        </div>  <!-- end post panel -->
    </div> <!-- end of row maincontent-->
@endsection('content')