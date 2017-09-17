@extends('layouts.master')

@section('title')
    Update Post Page
@endsection

@section('content')
    <div class="row" >
        
        <!-- Form -->
        <div class="col-sm-offset-2 col-sm-8 form-border">
            <form method="post" action="/post/{{$post->id}}">
                {{csrf_field()}}
                {{ method_field('PUT') }}    <!-- use the method put that using the hidden method put -->
                <div class="name"><h2>Update Post Form</h2></div>
                
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="form-group message"><label>User Name {{Auth::user()->fullname}} </label><br>
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                </div>
                
                <div class="name"><label>Title: </label><br>
                    @if(count($errors)>0)
                        <input type="text" name="title" value="{{old('title')}}"><span class="alert">{{$errors->first('title')}}</span>
                    @else
                        <input type="text" name="title" value="{{$post->title}}">
                    @endif
                </div>
                <div class="message"><label>Message: </label><br>
                    @if(count($errors)>0)
                        <textarea id="messagetextarea" name="message" rows="4">{{old('message')}}</textarea><span class="alert">{{$errors->first('message')}}</span>
                    @else
                        <textarea id="messagetextarea" name="message" rows="4">{{$post->message}}</textarea>
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
                        @if($post->privacy == "public")
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private">Private</option>
                        @elseif($post->privacy == "friends")
                            <option value="public">Public</option>
                            <option value="friends" selected>Friends</option>
                            <option value="private">Private</option>
                        @else                
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private" selected>Private</option>
                        @endif
                    @endif
                  </select>
                </div>
                
                <div class="message">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-default" href="{{url("/")}}">Cancel</a>
                </div>
                
            </form>
        </div>
    </div> <!-- end of row maincontent -->
@endsection('content')