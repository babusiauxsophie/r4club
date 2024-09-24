@extends('layouts.app')

@section('header')
<h1 style="padding: 0 2.5rem; margin-top: 2rem;">De Leden van de R4 club</h1>
@endsection

@section('content')

<form action="{{ url('/users') }}" method="GET" style="margin-bottom: 20px; padding: 0 2.5rem; margin-top: 2rem;">
    <div style="margin-bottom: 10px;">
        <input type="text" name="search" placeholder="Zoek op naam" value="{{ $search }}" style="padding: 8px; width: 200px; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        <button type="submit" style="padding: 8px 16px; border: none; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer; margin-left: 10px;">Zoek</button>
    </div>
</form>

<ol style="padding: 0 2.5rem;">
@foreach ($users as $user)
    <li style="margin-bottom: 20px;">
        <ul style="border: 1px solid #ddd; padding: 10px; border-radius: 4px; background-color: #f9f9f9;">
            <li style="margin-bottom: 10px;">
                <a href="/users/{{$user->id}}" style="text-decoration: none; color: #007bff;">
                    naam: {{ $user->firstname }} {{ $user->lastname }}
                </a>
            </li>
            <li>
                gebruikersnaam: {{ $user->username }}
            </li>
        </ul>
        <br>

        {{-- Show the edit button only if the authenticated user is the same as the current user --}}
        @if(Auth::check() && Auth::id() === $user->id)
            <a href="{{ route('users.edit', $user->id) }}" style="display: inline-block; padding: 8px 16px; border: none; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Edit</a>
        @endif
    </li>
@endforeach
</ol>

@if($users->isEmpty())
    <p style="padding: 0 2.5rem;">Geen Leden met die naam.</p>
@endif

<div class="pagination" style="margin-top: 20px; padding: 0 2.5rem;">
    {{ $users->appends(request()->query())->links() }}
</div>

@endsection
