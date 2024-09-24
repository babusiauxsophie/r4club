<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->input('search');

        $query = Post::whereNull('parent_id');  // Fetch only regular posts, not comments

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhereHas('user', function ($query) use ($search) {
                        $query->where('firstname', 'like', '%' . $search . '%')
                            ->orWhere('lastname', 'like', '%' . $search . '%');
                    });
            });
        }

        $posts = $query->simplePaginate(10);

        return view('posts.list', [
            'posts' => $posts,
            'search' => $search,
        ]);
    }

    public function detail($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);

        return view('posts.detail', [
            'post' => $post,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:posts,id',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->parent_id = $request->input('parent_id'); 
        $post->user_id = Auth::id();
        $post->save();

        if ($post->parent_id) {
            return redirect()->route('posts.detail', ['id' => $post->parent_id])
                ->with('success', 'Comment posted successfully.');
        } else {
            return redirect()->route('posts.detail', ['id' => $post->id])
                ->with('success', 'Post created successfully.');
        }
    }
}
