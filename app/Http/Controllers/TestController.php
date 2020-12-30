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
}

