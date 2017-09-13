@extends('layouts.app')
@section('title')
    Products Create Form
@endsection

@section('content')
    
    <!--@if(count($errors)> 0)-->
    <!--<div class="alert">-->
    <!--    <ul>-->
    <!--        @foreach ($errors->all() as $error)-->
    <!--        <li> {{$error}}</li>-->
    <!--        @endforeach-->
            
    <!--    </ul>-->
    <!--</div>-->
    <!--@endif-->

    <form method="POST" action="/product/{{$product->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}    <!-- we use the method put that using the hidden method put -->
        <p><label>Name</label>
            @if(count($errors)> 0)
                <input type="text" name="name" value="{{old('name')}}"><span class="alert">{{$errors->first('name')}}</span></p>
            @else
                <input type="text" name="name" value="{{$product->name}}"></p>
            @endif
        
        <p><label>Price</label>
            @if(count($errors)> 0)
                <input type="text" name="price" value="{{old('price')}}"><span class="alert">{{$errors->first('price')}}</span></p>
            @else
                <input type="text" name="price" value="{{$product->price}}"></p>
            @endif
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