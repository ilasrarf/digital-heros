<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class IndextController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('updated_at', 'desc')
            ->whereStatus('PUBLISHED')
            ->whereFeatured(1)
            ->take(4)
            ->get();

        return view('pages.landing', compact('posts'));
    }
}
