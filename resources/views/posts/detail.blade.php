@extends('layouts.app')

@section('header')
    <h1 style="text-align: center; padding: 1.5rem 0; margin-top: 2rem; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
        Post Details
    </h1>
@endsection

@section('content')

<div style="max-width: 800px; margin: 0 auto; padding: 2rem; background-color: #ffffff; border: 1px solid #ddd; border-radius: 8px; margin-top: 2rem;">
    <h1 style="font-size: 2.5rem; margin-bottom: 1.5rem; text-align: center;">
        {{ $post->title }}
    </h1>

    <p style="font-size: 1.25rem; margin-bottom: 1.5rem;">
        {{ $post->content }}
    </p>

    <p style="font-size: 1rem; color: #666; margin-bottom: 1.5rem;">
        Datum: {{ $post->created_at->format('F d, Y') }}
    </p>

    <div style="text-align: center; margin-bottom: 2rem;">
        <a href="/users/{{ $post->user->id }}" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">
            Poster: {{ $post->user->firstname }} {{ $post->user->lastname }}
        </a>
    </div>

    <h2 style="font-size: 1.75rem; margin-bottom: 1rem; text-align: center;">
        Comments:
    </h2>
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($post->comments as $comment)
        <li style="border: 1px solid #ddd; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; background-color: #f9f9f9;">
            <p style="font-size: 1.1rem; margin-bottom: 0.5rem;">
                {{ $comment->content }}
            </p>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 0.5rem;">
                Datum: {{ $comment->created_at->format('F d, Y') }}
            </p>
            <div style="border: .5px solid #007bff; padding: 0.2rem; border-radius: 4px; display: inline-block;">
                <a href="/users/{{ $comment->user->id }}" style="text-decoration: none; color: #007bff; font-size: .8rem">
                    Reactie van: {{ $comment->user->firstname }} {{ $comment->user->lastname }}
                </a>
            </div>
        </li>
        @endforeach
    </ul>

    @if (auth()->check())
    <form action="{{ route('posts.store') }}" method="POST" style="margin-top: 2rem;">
        @csrf
        <input type="hidden" name="parent_id" value="{{ $post->id }}">

        <div style="margin-bottom: 1rem;">
            <label for="content" style="font-size: 1.25rem; display: block; margin-bottom: 0.5rem;">Comment:</label>
            <textarea id="content" name="content" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px;" required></textarea>
            @error('content')
            <div class="error" style="color: red; margin-top: 0.5rem;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #007bff; color: white; border-radius: 4px; border: none; cursor: pointer;">
            Post Comment
        </button>
    </form>
    @endif
</div>

@endsection
