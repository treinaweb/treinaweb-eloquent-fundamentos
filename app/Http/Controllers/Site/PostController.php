<?php

namespace App\Http\Controllers\Site;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('news.index')->with([
            'posts' => $posts
        ]);
    }

    /**
     * Mostra um post único
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.single', [
            'post' => $post
        ]);
    }
}