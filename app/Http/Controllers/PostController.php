<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index(){
        $posts = DB::select('SELECT * FROM posts');
        // return $posts;
        return view('posts.index',compact('posts'));
    }
    function create(){
        return view('posts.create');
    }
    function store(Request $request){
        // return $request;
        DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);

        return redirect()->route('posts.index');
    }
    function edit(){
        return view('posts.edit');
    }
    function show($id){
        // return $id;
        // return view('posts.show');
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[
            $id
        ]);
        return view('posts.show',compact('posts'));
    }
}
