<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{secure_asset('css/style.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    <!-- Bootstrap core css (cdn) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    <!-- jQuery linking cdn files -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Bootstrap linking cdn files -->
    </head>
    
    <body>
        <!-- navigation bar -->
        <nav class="navbar navbar-inverse"> <!-- inverse=black theme, fixed-top=nav fix on top -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- collapse button -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand"  href="/">So Show Net</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav nav-pills navbar-nav navbar-left">  <!-- nav style = pills, right aligned -->
                        <li role="presentation"><a href="{{url("/")}}">Home</a></li>
                        <li role="presentation"><a href="{{url("user")}}">Search Users</a></li>
                        <!--<li role="presentation"><a href="#">Photos</a></li>-->
                        <li role="presentation"><a href="{{url("documentation")}}">Documentation</a></li>
                        <li role="presentation"><a href="{{url("erdiagram")}}">ER Diagram</a></li>
                        <form class="input-group navbar-form" style="max-width: 250px" id="search-form" method="get" action="search">
                            <input class="form-control" name="name" placeholder="Search Users..." />
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-searchbar">
                                <span class="glyphicon glyphicon-search">
                                    <span class="sr-only">Search</span>
                                </span>
                            </button>
                            </span>
                        </form>
                    </ul>
                    <ul class="nav nav-pills navbar-nav navbar-right">
                         <li role="presentation"><a href="{{url("user/create")}}">Create A User</a></li>
                         <li role="presentation"><a href="#">Login</a></li>
                         <li role="presentation"><a href="#">Register</a></li>
                    </ul>
                </div>
            </div> <!-- end navbar container -->
        </nav> <!-- end navbar -->
        
        <!-- main contend insert by child -->
        <div class="container">
            @yield('content') 
        </div>
    </body>
</htmlasdf>