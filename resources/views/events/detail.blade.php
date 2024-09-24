@extends('layouts.app')

@section('header')
    <h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
        Event Details
    </h1>
@endsection

@section('content')

<h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 1.5rem; margin-top: 2rem;">
    {{ $event->title }}
</h1>

<div style="max-width: 600px; margin: 0 auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
    <p style="font-size: 1.25rem; margin-bottom: 1.5rem;">
        {{ $event->description }}
    </p>

    <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">
        Adres
    </h2>
    <p style="font-size: 1.25rem; margin-bottom: 0.5rem;">
        {{ $event->streetname }} {{ $event->streetnumber }}
    </p>
    <p style="font-size: 1.25rem; margin-bottom: 1.5rem;">
        {{ $event->city }} {{ $event->zipcode }}
    </p>

    <a href="/users/{{ $event->user->id }}" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none; text-align: center;">
        Organisator: {{ $event->user->firstname }} {{ $event->user->lastname }}
    </a>
</div>

@endsection
