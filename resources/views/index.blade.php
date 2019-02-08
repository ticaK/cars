
@extends('layouts.master')

@section('title')
    Automobili
@endsection


@section('content')

    <ul>
            @foreach ($cars as $car)
            <a href = "/index/:id"> <li>{{$car->title}}</li><a>
            @endforeach
    </ul>
    
@endsection


