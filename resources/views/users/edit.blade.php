@extends('layouts.app')

@section('header')
    <h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">Edit Profile</h1>
@endsection

@section('content')

<form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" style="max-width: 600px; margin: 2rem auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
    @csrf
    @method('PATCH')

    <div style="margin-bottom: 1.5rem;">
        <label for="firstname" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Voornaam:</label>
        <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $user->firstname) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        @error('firstname')
            <div class="error" style="color: red; margin-top: 0.5rem;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1.5rem;">
        <label for="lastname" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Achternaam:</label>
        <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        @error('lastname')
            <div class="error" style="color: red; margin-top: 0.5rem;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1.5rem;">
        <label for="username" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Username:</label>
        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        @error('username')
            <div class="error" style="color: red; margin-top: 0.5rem;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1.5rem;">
        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Email Adres:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px;">
        @error('email')
            <div class="error" style="color: red; margin-top: 0.5rem;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">Update</button>
</form>

@endsection
