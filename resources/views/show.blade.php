
@extends('layouts.master')

    @section('title')
    {{$car->title}}
    @endsection
    
    
    @section('content')

    <div>
        <h1>{{$car->title}}</h1>
        <p>{{$car->producer}}</p>
        <p>{{$car->number_of_dors}}</p>
        
    </div>

    @endsection
    