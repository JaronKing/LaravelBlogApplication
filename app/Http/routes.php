<?php



Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contatct', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::controllers([
	'auth' => 'Auth\Authcontroller',
	'password' => 'Auth\PasswordController'
]);


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
