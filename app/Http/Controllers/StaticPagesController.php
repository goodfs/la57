<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //

    public  function home(){
       return date('Y-m-d H:i:s',time());
        return view('static_pages.home');
    }

    public  function help(){
        return view('static_pages/help');    }

    public  function about(){
        return view('static_pages/about');
    }
}
