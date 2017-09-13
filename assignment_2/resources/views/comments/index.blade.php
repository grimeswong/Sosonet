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
                
                <!--<div class="name"><label>Name: </label><br>-->
                <!--@if(count($errors)>0)-->
                <!--    <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}"><span class="alert">{{$errors->first('name')}}</span>-->
                <!--@else   -->
                <!--    <input type="text" name="name" placeholder="Enter your name">-->
                <!--@endif-->
                <!--</div>-->
                
                 <div class="form-group message"><label>User Name: </label><br>
                  <select name="user_id" class="form-control">
                      <option selected></option>
                    @foreach($users as $user) 
                        <option value="{{$user->id}}">{{$user->fullname}}</option>
                    @endforeach
                  </select>
                </div>
                
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
                    <img class="avatar" src= "/img/people-icon.png" alt="Image is not available"></img>
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
                            <button class="btn btn-danger btn-margin pull-right" type="submit">Delete</button>
                            </form>
                            <!--<a class="btn btn-danger pull-right" href="{{url("delete_comment/$comment->comment_id")}}">Delete</a>-->
                        </li>
                    @empty
                    <h3 class="error-middle">no comment</h3>
                    </ul>
                </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection('content')s