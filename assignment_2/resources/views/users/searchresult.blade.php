@extends('layouts.master')

@section('title')
    Search Result Page
@endsection

@section('content')
<div class="row">
     <div class="col-sm-4">
        <h2>Search for users</h2>
          <form class="input-group navbar-form" style="max-width: 250px" id="search-form" method=get action="search">
            <input class="form-control" name="name" placeholder="Search Friend..." />
            <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">
                    <span class="sr-only">Search</span>
                </span>
            </button>
            </span>
        </form>
    </div>
    
    <!-- User Listing -->
    <div class="col-sm-8">
     <!--<h2>Search Result</h2>-->
        
        @forelse ($users as $user)
        <div class="panel panel-primary">
            <div class="panel-heading clearfix">
                <a href="{{url("user/$user->id")}}" class="username">
                    <img class="avatar" src= "/{{$user->image}}" alt="Image's not available"></img>
                    <span>{{$user->fullname}}</span>
                </a>
            </div>
            <!--<div class="panel-body">-->
                
            <!--</div>-->
        </div>
        @empty 
            <h3 class="error-middle">Search Result: No user found</h3>
        @endforelse
        
    </div>  <!-- end post panel -->
 </div>
 @endsection('content')