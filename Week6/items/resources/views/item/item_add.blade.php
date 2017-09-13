@extends('layouts.master')

@section('title')
    Add Item Form
@endsection

@section('content')
    <h1>Add Item</h1>
    <form method="post" action="/item_add_action">
    {{csrf_field()}}  {{-- html can't see this comment --}} <!-- function for cross-site request forgery (CSRF) attacks -->
        <p><label>Summary</label>
        <input type ="text" name ="summary">
        </p>
        <p>
        <label>Details</label>
        <textarea name="details"></textarea>
        </p>
        <input type="submit" value="Add Item">
    </form>
@endsection('content')
