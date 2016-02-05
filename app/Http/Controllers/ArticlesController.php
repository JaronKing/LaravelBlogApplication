<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::all();
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

}
