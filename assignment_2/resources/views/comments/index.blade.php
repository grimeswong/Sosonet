@extends('layouts.master')

@section('title')
    View Comment Page
@endsection

@section('content')
    <div class="row">
         <!-- Form -->
        <div class="col-sm-4 form-border">
            <form method="post" action="/comment">
                {{csrf_field()}}
                <div class="name"><h2>Create Comment Form</h2></div>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                
                @if(Auth::check()) <!-- make sure user has logged in to get user name -->
                <div class="form-group message"><label>Current User: {{Auth::user()->fullname}}</label><br>
                    <input type="hidden" name="user_id" value="{{$post->user_id}}">
                </div>
                @endif
                
                <div class="message"><label>Message: </label><br>
                @if(count($errors)>0)
                    <textarea id="messagetextarea" name="message" rows="4" placeholder="Enter new message">{{old('message')}}</textarea><span class="alert">{{$errors->first('message')}}</span>
                @else
                    <textarea id="messagetextarea" name="message" rows="4" placeholder="Enter new message"></textarea>
                @endif
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
                    <img class="avatar" src= "/{{$post->user->image}}" alt="Image is not available"></img>
                    <span class="username">{{$post->user->fullname}}</span>
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->message}}</p>
                </div>
                
                <div class="panel-body">
                    <ul class="list-group">
                    @forelse ($comments as $comment)
                        <li class="list-group-item clearfix">
                            <p>{{$comment->user->fullname}}</p>
                            <span>{{$comment->message}}</span>
                             <form method="POST" action="/comment/{{$comment->id}}"> <!-- Delete Button -->
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}  <!-- we use the method delete that using the hidden method -->
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            @if(Auth::id() == $comment->user_id || Auth::id() == $post->user_id)    <!-- allow post or comment creator to delete -->
                                <button class="btn btn-danger btn-margin pull-right" type="submit">Delete</button>
                            @endif    
                            </form>
                            <!--<a class="btn btn-danger pull-right" href="{{url("delete_comment/$comment->comment_id")}}">Delete</a>-->
                        </li>
                    @empty
                    <h3 class="error-middle">no comment</h3>
                    </ul>
                </div>
                @endforelse
            </div>
            <div align="center">{{$comments->links()}}</div>
        </div>
    </div>

@endsection('content')