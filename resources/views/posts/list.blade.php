@extends('layouts.app')

@section('header')
<h1 style="padding: 0 2.5rem; margin-top: 2rem;">Posts van de leden van de R4 club</h1>
@endsection

@section('content')

<form action="{{ url('/posts') }}" method="GET" style="margin-bottom: 20px; padding: 0 2.5rem; margin-top: 2rem;">
    <div style="margin-bottom: 10px;">
        <input type="text" name="search" placeholder="Zoek posts" value="{{ $search }}" style="padding: 8px; width: 200px; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        <button type="submit" style="padding: 8px 16px; border: none; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer; margin-left: 10px;">Zoek</button>
    </div>
</form>

<h2 style="padding: 0 2.5rem 1rem;">Zelf iets posten</h2>
<form action="{{ route('posts.store') }}" method="POST" style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; background-color: #f9f9f9; max-width: 600px; margin-bottom: 2rem; margin-left: 2.5rem;">
    @csrf

    <div style="margin-bottom: 15px;">
        <h2 style="margin: 0;">Nieuwe post</h2>
        <label for="title" style="display: block; margin-bottom: 5px;">Titel:</label>
        <input type="text" id="title" name="title" required value="{{ old('title') }}" style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;">
        @error('title')
            <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="content" style="display: block; margin-bottom: 5px;">Inhoud:</label>
        <textarea id="content" name="content" required style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 4px; padding-left: 2.5rem; padding-right: 2.5rem;"></textarea>
        @error('content')
            <div class="error" style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" style="padding: 10px 20px; border: none; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer; padding-left: 2.5rem; padding-right: 2.5rem;">Voeg Post Toe</button>
</form>

<ul style="list-style-type: none; padding: 0; padding-left: 2.5rem; padding-right: 2.5rem; padding-top: 2rem">
@foreach ($posts as $post)
    <li style="margin-bottom: 20px;">
        <ul style="border: 1px solid #ddd; padding: 10px; border-radius: 4px; background-color: #f9f9f9;">
            <li style="margin-bottom: 10px;">
                <a href="/posts/{{$post->id}}" style="text-decoration: none; color: #007bff;">
                    {{ $post->title }} <br>
                    {{ $post->created_at->format('d-m-Y') }}
                </a> <br>
            </li>
            <li>
                <a href="/users/{{ $post->user->id }}" style="text-decoration: none; color: #007bff;">
                    poster: {{ $post->user->firstname }} {{ $post->user->lastname }}
                </a>
            </li>
        </ul>
    </li>
    <br>
@endforeach
</ul>

@if($posts->isEmpty())
    <p style="padding: 0 2.5rem;">No posts found.</p>
@endif

<div class="pagination" style="margin-top: 20px; padding: 0 2.5rem;">
    {{ $posts->links() }}
</div>

@endsection
