@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">Edit Car</h1>

    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST" style="max-width: 600px; margin: 2rem auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 1.5rem;">
            <label for="brand" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Merk:</label>
            <input type="text" id="brand" name="brand" value="{{ old('brand', $car->brand) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Model:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $car->name) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="build_year" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Bouw jaar:</label>
            <input type="number" id="build_year" name="build_year" value="{{ old('build_year', $car->build_year) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label for="color" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Kleur:</label>
            <input type="text" id="color" name="color" value="{{ old('color', $car->color) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">Update Car</button>
    </form>
@endsection
