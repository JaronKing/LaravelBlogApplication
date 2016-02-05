<?php

namespace App\Http\Controllers;

use App\Article;
use Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::latest()->published()->get();
    	return view('articles.index')->withArticles($articles);
    }

    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	return view('articles.show')->withArticle($article);
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function store()
    {
        $input = Request::all();
        Article::create($input);
        return redirect('articles');
    }

}
