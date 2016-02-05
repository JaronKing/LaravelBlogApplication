<?php

namespace App\Http\Controllers;

use App\Article;
use Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use Carbon\Carbon;
use App\Http\Requests\CreateArticle;

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

    public function store(CreateArticle $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit')->withArticle($article);
    }

    public function update($id, CreateArticle $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

}
