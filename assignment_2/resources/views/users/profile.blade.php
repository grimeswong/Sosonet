@extends('layouts.master')

@section('title')
    User Profile Page
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                        <img class="avatar" src= "/img/people-icon.png" alt="Image's not available"></img>
                        <span class="username">{{$user->fullname}}</span>
                        <span>Age: {{$age}}</span>
                </div>
            </div>
            @if (count($posts) > 1)
                @forelse ($posts as $post)
                <div class="panel panel-primary">
                    <div class="panel-heading clearfix">
                        <h4>{{$post->title}}</h4>
                    </div>
                    <div class="panel-body">
                        <p>{{$post->message}}</p>
                        <!-- Team show Privacy -->
                        <p class="pull-left">Privacy Level: {{$post->privacy}}</p>
                        <a class="btn btn-primary pull-right" href="{{url("comment/$post->id")}}">
                        View Comment
                        @foreach ($commentsCount as $commentCount)
                               @if($commentCount->id == $post->id)
                                <span class="badge">{{$commentCount->comments_count}}</span>
                            @endif
                            
                        @endforeach
                    </a>
                    </div>    
                </div>
                @empty
                    <h2>No Post to Show</h2>
                @endforelse
            @endif
            
        </div>  <!-- end post panel -->    
        
       
        
        
    </div>
@endsection('content')