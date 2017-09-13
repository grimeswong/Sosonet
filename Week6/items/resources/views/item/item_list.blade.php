@extends('layouts.master')

@section('title')
    Item List
@endsection
  
@section('content')  
    <h2><a href="item_add">Add a new item</a></h2>
    @if ($items)    
       @foreach($items as $item)
           <ul>
               <!--<li><a href="item_detail/{{$item->id}}">{{$item->summary}}</a></br></li>-->
               <li><a href="{{url("item_detail/$item->id")}}">{{$item->summary}}</a></br></li>  <!-- url("path") inside the double curly braces {{ url ("path")  }}
           </ul>
       @endforeach 
       <!--{{dump($items)}};-->
    @else
        No item found
    @endif
    
    
@endsection
  
