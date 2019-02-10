{{-- napomena: u views sam mogla da napravim folder  i u njega da smjestim  fajlove about.blade.php, cars.blade.php i show.blade.php --}}
@extends('layouts.master')

    @section('title')

        Cars

    @endsection


    @section('content')

        <ul>
            @foreach ($cars as $car)
                <a href = "/cars/{{$car->id}}">
                    <li> {{$car->title}}</li>
                <a>
            @endforeach
        </ul>
        
    @endsection

