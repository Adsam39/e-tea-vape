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
        return view('apropos');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }
}
