@extends('layouts.master')

@section('title')
    Update Post Page
@endsection

@section('content')
    <div class="row" >
        
        <!-- Form -->
        <div class="col-sm-4 form-border">
            <form method="post" action="/update_post_action">
                {{csrf_field()}}
                <div class="name"><h2>Update Post Form</h2></div>
                
                <!-- Error message -->
                @if (!empty($error))
                    <p class="name error">Error: {{$error}}</p>
                @endif
                
                <input type="hidden" name="post_id" value="{{$post->post_id}}">
                <div class="name"><label>Name: </label><br>
                    <input type="text" name="name" value="{{$post->name}}">
                </div>
                <div class="name"><label>Title: </label><br>
                    <input type="text" name="title" value="{{$post->title}}">
                </div>
                <div class="message"><label>Message: </label><br>
                    <textarea id="messagetextarea" name="message" rows="4">{{$post->message}}</textarea>
                </div>
                <div class="message">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-default" href="{{url("/")}}">Cancal</a>
                </div>
            </form>
        </div>
    </div> <!-- end of row maincontent -->
@endsection('content')