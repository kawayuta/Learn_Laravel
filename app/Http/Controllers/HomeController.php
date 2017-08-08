<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::all();
        $articles_model = Article::where('category','Model')->get();
        $articles_view = Article::where('category','View')->get();
        $articles_controller = Article::where('category','Controller')->get();

        return view('home',compact('articles','articles_model', 'articles_view', 'articles_controller'));
    }
}
