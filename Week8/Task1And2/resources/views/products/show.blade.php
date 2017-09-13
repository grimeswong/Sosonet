@extends('layouts.master')
@section('title')
    Products Show
@endsection

@section('content')

    <h1>Product Name: {{$product->name}}</h1>
    <p>Price: {{$product->price}}</p>
    <p>Manufacturer: {{$product->manufacturer->name}}</p>   <!-- access the product and related manufacturer -->
    <p><a href='/product/{{$product->id}}/edit'>Edit</a></p>
    <p>
        <form method="POST" action="/product/{{$product->id}}">
            {{csrf_field()}}
            {{ method_field('DELETE') }}  <!-- we use the method delete that using the hidden method -->
            <input type="submit" value="Delete">
        </form>
    </p>
    <p><a href='/product'>Back to home page</a></p>
@endsection