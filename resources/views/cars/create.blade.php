@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">Voeg een auto toe</h1>

    <form action="{{ route('cars.store', ['user' => $user->id]) }}" method="POST" style="max-width: 600px; margin: 2rem auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
        @csrf
        <div style="margin-bottom: 1.5rem;">
            <label for="brand" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Merk:</label>
            <input type="text" id="brand" name="brand" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Model naam:</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="build_year" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Bouw jaar:</label>
            <input type="number" id="build_year" name="build_year" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="color" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Kleur:</label>
            <input type="text" id="color" name="color" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">Add Car</button>
    </form>
@endsection
