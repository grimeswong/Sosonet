@extends('layouts.master')

@section('title')
    Update Item Form
@endsection

@section('content')
    <h1>Update Item</h1>
    <form method="post" action="/item_update_action">
    {{csrf_field()}}  {{-- html can't see this comment --}} <!-- function for cross-site request forgery (CSRF) attacks -->
        <input type="hidden" name="id" value="{{$item->id}}">
        <p><label>Summary</label>
        <input type ="text" name ="summary" value="{{$item->summary}}">
        </p>
        <p>
        <label>Details</label>
        <textarea name="details">{{$item->details}}</textarea>
        </p>
        <input type="submit" value="Update Item">
    </form>
@endsection('content')