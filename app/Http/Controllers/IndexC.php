<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexC extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function search()
    {
        return view('search');
    }

    public function about()
    {
        return view('apropos2');
    }

    public function contact()
    {
        return view('contact2');
    }

    public function blog()
    {
        return view('blog');
    }

    public function person()
    {
        return view('account');
    }

    public function account(Request $request)
    {
        if($request->txtid == "adsam39" && $request->txtmdp == "coucou")
        {
            return redirect()->action('App\Http\Controllers\IndexC@index');
        }
        else
        {
            return redirect()->action('App\Http\Controllers\IndexC@index');
        }
    }
}