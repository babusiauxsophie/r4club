@extends('layouts.app')

@section('header')
<h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
        Car Details
</h1>
@endsection

@section('content')

<h1 style="text-align: center; font-size: 2.5rem; margin-bottom: 1.5rem; margin-top: 2rem;">
        {{ $car->brand }} {{ $car->name }}
</h1>

<div style="max-width: 600px; margin: 0 auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px; text-align: center;">
        <p style="font-size: 1.25rem; margin-bottom: 1rem;">
                <strong>Merk:</strong> {{ $car->brand }}
        </p>
        <p style="font-size: 1.25rem; margin-bottom: 1rem;">
                <strong>Model:</strong> {{ $car->name }}
        </p>
        <p style="font-size: 1.25rem; margin-bottom: 1rem;">
                <strong>Bouw jaar:</strong> {{ $car->build_year }}
        </p>
        <p style="font-size: 1.25rem; margin-bottom: 1.5rem;">
                <strong>Kleur:</strong> {{ $car->color }}
        </p>
        <a href="/users/{{ $car->user->id }}" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">
                Eigenaar: {{ $car->user->firstname }} {{ $car->user->lastname }}
        </a>
</div>

@endsection