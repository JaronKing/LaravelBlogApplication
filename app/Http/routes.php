<?php



Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contatct', 'PagesController@contact');

Route::get('articles', 'ArticlesController@index');


