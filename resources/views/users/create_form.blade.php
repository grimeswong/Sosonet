@extends('layouts.master')

@section('title')
    User Register Page
@endsection

@section('content')
<div class="row">
    <div class="col-sm-offset-3 col-sm-6 form-border">
        <h2>User Register Page</h2>
        <form method="post" action="/user">
            {{csrf_field()}}
            <div class="name form-group"><h2>Create User Form</h2></div>
            <div class="name"><label>Full Name </label><br>
                @if(count($errors)>0)
                    <input type="text" name="fullname" value="{{old('email')}}"><span class="alert">{{$errors->first('fullname')}}</span>
                @else
                    <input type="text" name="fullname" placeholder="Enter a full name">
                @endif
            </div>
            <div class="name form-group"><label>Password</label><br>
                @if(count($errors)>0)
                    <input type="password" name="password" ><span class="alert">{{$errors->first('password')}}</span>
                @else
                    <input type="password" name="password" placeholder="Enter a password">
                @endif
            </div>
            <div class="name form-group"><label>Confirm Password</label><br>
                @if(count($errors)>0)
                    <input type="password" name="password_confirmation"><span class="alert">{{$errors->first('email')}}</span>
                @else
                    <input type="password" name="password_confirmation" placeholder="Confirm password">
                @endif
            </div>
            <div class="name form-group"><label>Email</label><br>
                @if(count($errors)>0)
                    <input type="text" name="email" value="{{old('email')}}"><span class="alert">{{$errors->first('email')}}</span>
                @else
                    <input type="text" name="email" placeholder="Enter an email">
                @endif
            </div>
            <div class="name form-group"><label>DOB</label><br>
                @if(count($errors)>0)
                    <input type="date" name="DOB" value="{{old('DOB')}}"><span class="alert">{{$errors->first('DOB')}}</span>
                @else
                    <input type="date" name="DOB" placeholder="yyyy/mm/dd">
                @endif
            </div>
            <div class="name form-group"><label>Upload Image File</label><br>
                @if(count($errors)>0)
                    <input type="text" name="image" value="{{old('image')}}"><span class="alert">{{$errors->first('image')}}</span>
                @else
                    <input type="text" name="image" placeholder="Enter a path of image">
                @endif
            </div>
            <div class="message">
                <button class="btn btn-warning" type="submit">Create new user</button>
                <a class="btn btn-default" href="{{url("user")}}">Cancel</a>
            </div>
        </form>
            <a class="name btn btn-success" href="{{url("post")}}">Return to home page</a>
        
        
    </div>
     <!-- End Form -->      
 </div>
 @endsection('content')