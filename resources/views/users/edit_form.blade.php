@extends('layouts.master')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>User Profile Change Form</h2>
            <div class="panel panel-primary">
                @if(count($errors)> 0)
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                @endif
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/user/{{Auth::id()}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}    <!-- we use the method put that using the hidden method put -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">

                                @if ($errors->has('name'))
                                    <input id="name" type="text" class="form-control" name="fullname" value="{{ old('name') }}" required autofocus>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @else
                                    <input id="name" type="text" class="form-control" name="fullname" value="{{Auth::user()->fullname}}" required autofocus>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">

                                @if ($errors->has('email'))
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @else
                                    <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">-->
                        <!--    <label for="password" class="col-md-4 control-label">Password</label>-->

                        <!--    <div class="col-md-6">-->

                        <!--        @if ($errors->has('password'))-->
                        <!--            <input id="password" type="password" class="form-control" name="password" required>-->
                        <!--            <span class="help-block">-->
                        <!--                <strong>{{ $errors->first('password') }}</strong>-->
                        <!--            </span>-->
                        <!--        @else-->
                        <!--            <input id="password" type="password" class="form-control" name="{{Auth::user()->password}}" required>-->
                        <!--        @endif-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="form-group">-->
                        <!--    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>-->

                        <!--    <div class="col-md-6">-->
                        <!--        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                            <label for="DOB" class="col-md-4 control-label">DOB</label>

                            <div class="col-md-6">

                                @if ($errors->has('DOB'))
                                    <input id="DOB" type="date" class="form-control" name="DOB" value="{{ old('DOB') }}" required>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DOB') }}</strong>
                                    </span>
                                @else
                                    <input id="DOB" type="date" class="form-control" name="DOB" value="{{Auth::user()->DOB}}" required>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">

                                @if ($errors->has('image'))
                                    <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @else    
                                    <input id="image" type="file" class="form-control" name="image" value="{{Auth::user()->image }}" required>
                                @endif
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirm to change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
