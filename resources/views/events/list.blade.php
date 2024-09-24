@extends('layouts.app')

@section('header')
<h1 style="padding: 0 2.5rem; margin-top: 2rem;">De Events van de R4 club</h1>
@endsection

@section('content')

<form action="{{ url('/events') }}" method="GET" style="margin-bottom: 20px; padding: 0 2.5rem; margin-top: 2rem;">
    <div style="margin-bottom: 10px;">
        <input type="text" name="search" placeholder="Search events" value="{{ request('search') }}" style="padding: 8px; width: 200px; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        <input type="date" name="date" placeholder="Select date" value="{{ request('date') }}" style="padding: 8px; width: 200px; border: 1px solid #ccc; border-radius: 4px; margin-left: 10px; padding-left: 2.5rem; padding-right: 2.5rem;">
        <button type="submit" style="padding: 8px 16px; border: none; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer; margin-left: 10px; padding-left: 2.5rem; padding-right: 2.5rem;">Zoek</button>
    </div>
</form>

@if (auth()->check())
<h2 style="padding: 0 2.5rem 1rem;">Zelf een event aanmaken</h2>
<form action="{{ route('events.store') }}" method="POST" style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; background-color: #f9f9f9; max-width: 600px; margin-left: 2.5rem">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="title" style="display: block; margin-bottom: 5px; margin-top: 10px">Event naam:</label>
        <input type="text" id="title" name="title" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('title')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="description" style="display: block; margin-bottom: 5px;">Beschrijving:</label>
        <textarea id="description" name="description" rows="4" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;"></textarea>
        @error('description')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="date" style="display: block; margin-bottom: 5px;">Datum:</label>
        <input type="date" id="date" name="date" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('date')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="streetname" style="display: block; margin-bottom: 5px;">Straatnaam:</label>
        <input type="text" id="streetname" name="streetname" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('streetname')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="streetnumber" style="display: block; margin-bottom: 5px;">Nummer:</label>
        <input type="text" id="streetnumber" name="streetnumber" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('streetnumber')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="city" style="display: block; margin-bottom: 5px;">Gemeente:</label>
        <input type="text" id="city" name="city" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('city')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="zipcode" style="display: block; margin-bottom: 5px;">Postcode:</label>
        <input type="text" id="zipcode" name="zipcode" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('zipcode')
        <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" style="padding: 10px 20px; border: none; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer; padding-left: 2.5rem; padding-right: 2.5rem;">Maak Event</button>
</form>
@endif

<ul style="list-style-type: none; padding: 0; padding-left: 2.5rem; padding-right: 2.5rem; padding-top: 2rem">
    @foreach ($events as $event)
    <li style="margin-bottom: 20px;">
        <ul style="border: 1px solid #ddd; padding: 10px; border-radius: 4px; background-color: #f9f9f9;">
            <li style="margin-bottom: 10px;">
                <a href="/events/{{$event->id}}" style="text-decoration: none; color: #007bff;">
                    {{ $event->title }} <br>
                    {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}
                </a> <br>
            </li>
            <li>
                <a href="/users/{{$event->user->id}}" style="text-decoration: none; color: #007bff;">
                    organisator: {{ $event->user->firstname }} {{ $event->user->lastname }}
                </a>
            </li>
        </ul>
    </li>
    @endforeach
</ul>

<div class="pagination" style="margin-top: 20px; padding: 0 2.5rem;">
    {{ $events->appends(request()->query())->links() }}
</div>

@endsection
