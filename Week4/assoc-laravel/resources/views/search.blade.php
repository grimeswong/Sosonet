@extends('layouts.master')

@section('title')
    Search Results
@endsection

@section('content')    <!-- if the search fields are not empty, print out the search keyword(s) -->
    @if(!empty($name))
        <h2>Search result for {{$name}}</h2>
    @endif
    @if(!empty($year))
        <h2>Search result for {{$year}}</h2>
    @endif
    @if(!empty($state))
        <h2>Search result for {{$state}}</h2>
    @endif
    
    <table class ="bordered">
        
        @if(!empty($pms)) <!-- if the $pms is not empty, print the table headers -->
        <thead>
            <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
        </thead>
        @endif
        
        @forelse($pms as $pm)
        <tbody>
            <tr><td>{{$pm['index']}}</td>
                <td>{{$pm['name']}}</td>
                <td>{{$pm['from']}}</td>
                <td>{{$pm['to']}}</td>
                <td>{{$pm['duration']}}</td>
                <td>{{$pm['party']}}</td>
                <td>{{$pm['state']}}</td>
            </tr>        
        </tbody>
            
        @empty
            <h2>no match result found!!!</h2>
        @endforelse
    </table>
   
            
@endsection('content')