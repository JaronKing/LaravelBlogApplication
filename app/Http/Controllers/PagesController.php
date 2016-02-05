<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function about()
    {
    	$name = 'Jaron King';
    	return view('pages.about')->withName($name);
    }

    public function index()
    {
    	return view('pages.about')->withName('Jaron');
    }

    public function contact()
    {

    	return view('pages.contact');
    }
}
