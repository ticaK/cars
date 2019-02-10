
@extends('layouts.master')

    @section('title')

        {{$car->title}}
    
    @endsection
    
    
    @section('content')

        <div>
            <h1>{{$car->title}}</h1>
            <p>Producer: {{$car->producer}}</p>
            <p>Number of doors: {{$car->number_of_doors}}</p>   
        </div>

    @endsection
    