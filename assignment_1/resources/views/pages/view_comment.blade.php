@extends('layouts.master')

@section('title')
    View Comment Page
@endsection

@section('content')
    <div class="row">
         <!-- Form -->
        <div class="col-sm-4 form-border">
            <form method="post" action="/add_comment_action">
                {{csrf_field()}}
                <div class="name"><h2>Create Comment Form</h2></div>
                <!-- Error message -->
                @if (!empty($error))
                    <p class="name error">Error: {{$error}}</p>
                @endif
                <input type="hidden" name="post_id" value="{{$post->post_id}}">
                <div class="name"><label>Name: </label><br>
                    <input type="text" name="name" value="{{$name}}" placeholder="Enter your name">
                </div>
                <div class="message"><label>Message: </label><br>
                    <textarea id="messagetextarea" name="message" rows="4" placeholder="Enter new message">{{$message}}</textarea>
                </div>
                <div class="message">
                    <button class="btn btn-warning" type="submit">Create new comment</button>
                </div>
            </form>
        </div>
         <!-- End Form -->    
         
        <div class="col-sm-8" >
            <h2>View Comment Page</h2>
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <img class="avatar" src= "/img/people-icon.png" alt="Image is not available"></img>
                    <span class="username">{{$post->name}}</span>
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->message}}</p>
                </div>
                
                <div class="panel-body">
                    <ul class="list-group">
                    @forelse ($comments as $comment)
                        <li class="list-group-item clearfix">
                            <p>{{$comment->name}}</p>
                            <span>{{$comment->message}}</span>
                            <a class="btn btn-danger pull-right" href="{{url("delete_comment/$comment->comment_id")}}">Delete</a>
                        </li>
                    @empty
                    <h3 class="error-middle">no comment</h3>
                    </ul>
                </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection('content')