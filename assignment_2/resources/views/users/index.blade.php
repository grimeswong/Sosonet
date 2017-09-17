@extends('layouts.master')

@section('title')
    Home Page
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
 </div>
 @endsection('content')