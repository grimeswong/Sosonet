@extends('layouts.master')

@section('title')
    User Profile Page
@endsection

@section('content')
    
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <h2 col>User Profile</h2>
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                        
                        <a href="/user/{{$user->id}}">
                            <img class="avatar" src= "/{{$user->image}}" alt="Image's not available"></img>
                            <span class="username">{{$user->fullname}}</span>
                        </a>
                        <span>Age: {{$age}}</span>
                        @if(Auth::check()) <!-- Check the user whether logged in -->
                            @foreach ($friendships as $friendship)
                                <!--<h2>Friendship {{$friendship}}, friendship id {{$friendship->id}}</h2>-->
                            
                                @if($friendship->id == Auth::id()) <!-- if user is not current user and not is friend of user yet -->
                                <form method="post" action="/friend/{{$user->id}}">
                                    {{csrf_field()}}                                    
                                    {{ method_field('DELETE') }}  <!-- we use the method delete that using the hidden method -->
                                    <button class="btn btn-danger pull-right" type="submit">Unfriend</button>
                                </form>
                                
                                @elseif($friendship->id != $user->id && $user->id != Auth::id())
                                <!--<form method="post" action="/addFriend">-->
                                <!--    <input type="hidden" name="user_id">-->
                                <!--    <input type="hidden" name="friend_user_id">-->
                                <!--    <button class="btn btn-success pull-right" type="submit">Add Friend</button>-->
                                <!--</form>-->
                                
                                @elseif($user->id != Auth::id())    <!-- user browse his own profile
                                    <!-- do nothing -->
                                @else
                             
                                @endif
                            @endforeach    
                        @endif <!-- endif Auth::check() -->
                </div>
            </div>
            
            
            
            @if (count($posts) > 0)
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
                                    <span class="badge">{{count($post->comments)}}</span>
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