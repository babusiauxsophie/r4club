@extends('layouts.app')

@section('header')
<h1>De Auto's van de R4 club</h1>
@endsection

@section('content')

<ul>
@foreach ($cars as $car)
    <li>
        <a href="/cars/{{ $car->id }}">{{ $car->brand }} {{ $car->name }}</a> <br>

        
        <a href="/users/{{ $car->user->id }}">Eigenaar:{{ $car->user->firstname }} {{ $car->user->lastname }}</a>
    </li>
    
    <br>

@endforeach
</ul>
@endsection