@extends('layouts.master')

@section('title')
    Products Index
@endsection

@section('content')
    <h2><a href='/product/create'>Create a new product</a></h2>
<ul>
    @foreach ($products as $product)
        <a href="/product/{{$product->id}}"><li>{{ $product->name }}</li></a>
    @endforeach
</ul>
@endsection
