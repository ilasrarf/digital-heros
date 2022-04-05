<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        if ($slug) {
            $category = Category::where('slug', $slug)->first();
            $posts = Post::orderby('created_at', 'desc')
                ->whereStatus('PUBLISHED')
                ->whereCategoryId($category->id)
                ->paginate(3);
        } else {
            $posts = Post::orderby('created_at', 'desc')
                ->whereStatus('PUBLISHED')
                ->paginate(3);
        }

        $categories = Category::all();

        return view('pages.blogList', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'PUBLISHED')
            ->first();

        if (session()->get('viewed') != $post->id) {
            session()->put('viewed', $post->id);
            $post->nb_visit++;
            $post->save();
        }

        $posts = Post::orderBy('created_at', 'desc')->whereStatus('PUBLISHED')->where('slug', '!=', $slug)->limit(3)->get();
        $categories = Category::all();

        $prev_id = Post::where('id', '<', $post->id)->max('id');
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_post = Post::find($prev_id, ['title', 'slug', 'image']);
        $next_post = Post::find($next_id, ['title', 'slug', 'image']);

        $user = User::where('id', $post->author_id)->first();


        return view('pages.blogView', compact('post', 'categories', 'posts', 'user'))
            ->with('prev_post', $prev_post)
            ->with('next_post', $next_post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
