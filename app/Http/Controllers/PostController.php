<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        $posts = Post::get();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
        // 方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->created_at = now();
        // $post->updated_at = now();

        // 方法二
        // $post = new Post;
        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        // 方法三
        // $post = new Post;
        // $post->fill($request->all());

        // 方法四
        Post::create($request->all());
        
        // $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *23737093
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show',compact('post'));
        // return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // 方法一
        // $post = Post::findOrFail($post->id);
        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        // 方法二
        // $post = Post::findOrFail($post->id);
        // $post->fill($request->all());

        // 方法三
        $post->fill($request->all());
        $post->save();

        return redirect()-> route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // 方法一
        // $post = Post::findOrFail($post->id);
        // $post->delete();

        // 方法二
        // $post->delete();

        // 方法三
        Post::destroy($post->id);

        return redirect()->route('posts.index');
    }
}
