@extends('layouts.app')

@section('header')
    <h1 style="padding: 0 2.5rem; margin-top: 2rem;">Profile of {{ $user->firstname }} {{ $user->lastname }}</h1>
@endsection

@section('content')

<div style="padding: 0 2.5rem; margin-bottom: 2rem;">
    <h1 style="font-size: 2rem; margin-bottom: 10px;">
        {{ $user->firstname }} {{ $user->lastname }}
    </h1>
    <h2 style="font-size: 1.5rem; margin-bottom: 20px;">{{ $user->username }}</h2>
    @if(Auth::id() == $user->id)
        <a href="{{ route('users.edit', ['id' => $user->id]) }}" style="padding: 8px 16px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Werk gegevens bij</a>
    @endif
</div>

<div style="padding: 0 2.5rem; margin-bottom: 2rem;">
    <h2 style="font-size: 1.5rem; margin-bottom: 10px;">{{ $user->firstname }}'s Auto's:</h2>
    @if(Auth::id() == $user->id)
        <a href="{{ route('cars.create', ['user' => $user->id]) }}" style="padding: 8px 16px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none; margin-bottom: 20px; display: inline-block;">Voeg een auto toe</a>
        <br><br>
    @endif
    @foreach ($user->cars as $car)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 15px; background-color: #f9f9f9;">
            <h3 style="margin: 0;">
                <a href="/cars/{{ $car->id }}" style="text-decoration: none; color: #007bff;">{{ $car->brand }} {{ $car->name }}</a>
                @if(Auth::id() == $user->id)
                    <a href="{{ route('cars.edit', ['car' => $car->id]) }}" style="padding: 4px 8px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none; margin-left: 10px;">pas aan</a>
                @endif
            </h3>
            <p style="margin: 5px 0;">Kleur: {{ $car->color }}</p>
            <p style="margin: 5px 0;">Bouw jaar: {{ $car->build_year }}</p>
        </div>
    @endforeach
</div>

<div style="padding: 0 2.5rem; margin-bottom: 2rem;">
    <h2 style="font-size: 1.5rem; margin-bottom: 10px;">{{ $user->firstname }}'s Evenementen</h2>
    @foreach ($user->events as $event)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 15px; background-color: #f9f9f9;">
            <a href="/events/{{ $event->id }}" style="text-decoration: none; color: #007bff;">{{ $event->title }}</a>
        </div>
    @endforeach
</div>

<div style="padding: 0 2.5rem; margin-bottom: 2rem;">
    <h2 style="font-size: 1.5rem; margin-bottom: 10px;">{{ $user->firstname }}'s Posts:</h2>
    @foreach ($user->posts()->whereNull('parent_id')->get() as $post)
        <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 15px; background-color: #f9f9f9;">
            <a href="/posts/{{ $post->id }}" style="text-decoration: none; color: #007bff;">{{ $post->title }}</a>
        </div>
    @endforeach
</div>

@endsection

