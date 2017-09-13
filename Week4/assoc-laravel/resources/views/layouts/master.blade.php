<!DOCTYPE html>
<html>
    <head>
      <title>@yield('title')</title>    <!-- will replace by the child "title" -->
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{secure_asset('css/wp.css')}}">
    </head>
    
    <body>
         @yield('content')             <!-- will replace by the child "content" -->
    </body>
</htmlasdf>