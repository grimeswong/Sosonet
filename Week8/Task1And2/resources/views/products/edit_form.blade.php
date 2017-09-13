@extends('layouts.master')
@section('title')
    Products Edit Form
@endsection

@section('content')
    <form method="POST" action="/product/{{$product->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}    <!-- we use the method put that using the hidden method put -->
        </p><label>Name</label>
        <input type="text" name="name" value="{{$product->name}}"></p>
        <p><label>Price</label>
        <input type="text" name="price" value="{{$product->price}}"><br></p>
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == $product->manufacturer_id)
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
                {{$manufacturer->id}}
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                {{$manufacturer->id}}
            @endif
        @endforeach
        </select>        
        <input type="submit" value="Update">
    </form>
    <p><a href='/product/{{$product->id}}'>Back to product detail page</a></p>
@endsection