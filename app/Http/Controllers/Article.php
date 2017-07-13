<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    public function index()
    {
        $first_name = "Yuta";
        $last_name = "Kawa";
        return view('articles.index', compact('first_name', 'last_name'));
    }

    public function create()
    {

        return view('articles.create');
    }

    public function store() {
        $inputs = \Request::all();
        Article::create($inputs);
        return redirect('articles');
    }
}
