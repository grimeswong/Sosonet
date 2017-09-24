@extends('layouts.master')

@section('title')
    Search Result Page
@endsection

@section('content')
<div class="row">
    
    <!-- User Listing -->
    <div class="col-sm-offset-2 col-sm-8">
     <h2>Search Result Page</h2>
        
        @forelse ($users as $user)
        <div class="panel panel-primary">
            <div class="panel-heading clearfix">
                <a href="{{url("user/$user->id")}}" class="username">
                    <img class="avatar" src= "/{{$user->image}}" alt="Image's not available"></img>
                    <span>{{$user->fullname}}</span>
                </a>
            </div>
        </div>
        @empty 
            <h3 class="error-middle">Search Result: No user found</h3>
        @endforelse
        
    </div>  <!-- end post panel -->
 </div>
 @endsection('content')