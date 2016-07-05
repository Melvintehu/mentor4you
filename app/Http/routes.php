<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('/aanmelden-als-jongere', 'PagesController@jongerenAanmelden');
Route::get('/contact', 'PagesController@contact');
Route::get('/aanmelden-als-mentor', 'PagesController@mentorenAanmelden');
Route::get('/behaalde-resultaten', 'PagesController@resultaten');
Route::get('/over-ons', 'PagesController@overons');
Route::get('/steun-ons', 'PagesController@steunons');
Route::get('/actueel', 'PagesController@actueel');

Route::group(['prefix' => 'cms'], function () {
	
	// get routes
	Route::get('/', function(){
        return view('cms.cms');
    });



});