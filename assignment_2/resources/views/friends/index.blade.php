@extends('layouts.master')

@section('title')
    Friends Page
@endsection

@section('content')
    
    <!-- User Friend Listing -->
    <div class="col-sm-offset-2 col-sm-8">
        <h2>Friendship Page</h2>
        @forelse ($friendships as $friend)
        <div class="panel panel-primary">
            <div class="panel-heading clearfix">
                <a href="{{url("user/$friend->id")}}" class="username">
                    <img class="avatar" src= "/{{$friend->image}}" alt="Image's not available"></img>
                    <span>{{$friend->fullname}}</span>
                </a>
                <form method="post" action="/friend/{{$friend->id}}">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}  <!-- we use the method delete that using the hidden method -->
                    <button class="btn btn-danger btn-margin pull-right" type="submit">Unfriend</button>
                </form>
            </div>
        </div>
        @empty 
            <h3 class="error-middle">Search Result: No user found</h3>
        @endforelse
        
    </div>  <!-- end post panel -->
    
@endsection('content')