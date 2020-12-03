<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index()
    {
        $post = Post::published()->latest()->paginate(6);
        return Inertia::render('Post/Index', [
            'posts' => PostResource::collection($post),
        ]);
    }

    public function show(Post $post)
    {
        //$post = Post::findOrFail($id);
        return Inertia::render('Post/ReadPost', [
            'post' => new PostResource($post),
        ]);
    }
}
