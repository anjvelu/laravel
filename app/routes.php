<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
	return "Hello World \n";
});

Route::get('/authtest', array('before' => 'auth.once', function()
{
    return "login Success";
}));

Route::group(array('prefix' => 'api/v1', 'before' => 'auth.once'), function()
{
    Route::resource('url', 'UrlController');
});

//Route::get("authors", array("as" => "authors", "uses" => "authers@index"));