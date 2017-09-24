@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="row">
        
        <!-- Create Post Form -->
        <div class="col-sm-4 form-border">
            <form method="post" action="/post">
                {{csrf_field()}}
                <div class="name form-group"><h2>Create Post Form</h2></div>
                
                @if(Auth::check()) <!-- make sure user has logged in to get user name -->
                <div class="name">
                    <img class="avatar" src= "/{{Auth::user()->image}}" alt="Image's not available"></img>
                    <label>Current User: {{Auth::user()->fullname}}</label>
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                </div>
                @endif

                <div class="name"><label>Title: </label><br>
                    @if(count($errors)>0)
                        <input type="text" name="title" value="{{old('title')}}"><span class="alert">{{$errors->first('title')}}</span>
                    @else
                        <input type="text" name="title" placeholder="Enter a title">
                    @endif
                </div>
                <div class="message"><label>Message: </label><br>
                    @if(count($errors)>0)
                        <textarea id="messagetextarea" name="message" rows="4" >{{old('message')}}</textarea><span class="alert">{{$errors->first('message')}}</span>
                    @else
                        <textarea id="messagetextarea" name="message" rows="4" placeholder="Enter new message"></textarea>
                    @endif
                </div>
                <div class="form-group message">
                  <label for="privacy">Privacy</label>
                        <select name="privacy" class="form-control">
                    @if (count($errors)>0)
                        @if(old('privacy') == "public")
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private">Private</option>
                        @elseif(old('privacy') == "friends")
                            <option value="public">Public</option>
                            <option value="friends" selected>Friends</option>
                            <option value="private">Private</option>
                        @else                
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private" selected>Private</option>
                        @endif
                    @else      
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private">Private</option>
                    @endif
                  </select>
                </div>
                <div class="message">
                    <button class="btn btn-warning" type="submit">Create new post</button>
                </div>
            </form>
        </div>
         <!-- End Form -->      
                
        <!-- Post Listing -->
        <div class="col-sm-8">
            
            @forelse ($posts as $post)
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <a href="/user/{{$post->user_id}}">
                        <img class="avatar" src= "/{{$post->user->image}}" alt="Image's not available"></img>
                        <span class="username">{{$post->user->fullname}}</span>
                    </a>
                    @if(Auth::id() == $post->user_id)
                    <form method="POST" action="/post/{{$post->id}}"> <!-- Delete Button -->
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}  <!-- we use the method delete that using the hidden method -->
                        <button class="btn btn-danger btn-margin pull-right" type="submit">Delete</button>
                    </form>
                    <a class="btn btn-success btn-margin pull-right" href="post/{{$post->id}}/edit">Edit</a>
                    @endif
                </div>
                
                <div class="panel-body">
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->message}}</p>
                    <!-- Team show Privacy -->
                    <p class="pull-left">Privacy Level: {{$post->privacy}}</p>
                    <a class="btn btn-primary pull-right" href="{{url("comment/$post->id")}}">
                        View Comment
                        <span class="badge">{{count($post->comments)}}</span>
                    </a>
                </div>
                
            </div>
            @empty 
                <h3 class="error-middle">No post found</h3>
            @endforelse
            
        </div>  <!-- end post panel -->
    </div> <!-- end of row maincontent-->
@endsection('content')