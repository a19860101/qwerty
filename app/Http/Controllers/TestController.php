<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function about(){
        return view('about');
    }
    function welcome(){
        return view('welcome');
    }
    function product($id){
        // return 'product '.$id;
        // return view('product',['id' => $id]);
        // return view('product')->with(['id' => $id]);
        return view('product',compact('id'));
    }
    function create(){
        return view('create');
    }
    function store(Request $request){
        // return $request;
        return view('store',compact('request'));
        // return $request->qty;
    }
}

