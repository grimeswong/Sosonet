@extends('layouts.master')

@section('title')
    Item List
@endsection
  
@section('content')  
    
   <h1>{{$item->summary}}</h1>
   {{$item->details}}
   <p><a href="{{url("item_delete/$item->id")}}">Delete Item</a></p>
   <p><a href="{{url("item_update/$item->id")}}">Update Item</a></p>  <!-- /item-update <- go up to upper level -->
   <p><a href="/">Home</a></p>
@endsection