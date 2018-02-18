<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a top 5 of the articles and tags.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
//        $articles=Article::orderBy('created_at', 'desc')->take(5)->get();
//        $tags=Tag::orderBy('created_at', 'desc')->take(5)->get();
//        return view('pages.home',['articles'=>$articles, 'tags'=>$tags]);
    }
}
