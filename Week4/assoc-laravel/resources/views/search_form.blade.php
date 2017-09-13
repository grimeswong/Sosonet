@extends('layouts.master')    <!-- using the layouts page template -->

@section('title')
    Search Form
@endsection


@section('content')
    <h2>Australian Prime Ministers</h2>
    <h3>Query</h3>
  
    <form method="post" action="search">    <!-- use "post" to post form data for sensitive information -->
        {{csrf_field()}}  {{-- html can't see this comment --}} <!-- function for cross-site request forgery (CSRF) attacks -->
        <table>
          <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
          <tr><td>Year: </td><td><input type="text" name="year"></td></tr>
          <tr><td>State: </td><td><input type="text" name="state"></td></tr>
          <tr><td colspan=2><input type="submit" value="Search">
                            <input type="reset" value="Reset"></td></tr>
        <table>
    </form>
    <hr>
@endsection('content')    

