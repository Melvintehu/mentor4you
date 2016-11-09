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

// website routes


Route::get('/', 'PagesController@indexHome');
Route::get('/aanmelden-als-jongere', 'PagesController@jongerenAanmelden');
Route::get('/contact', 'PagesController@contact');
Route::get('/aanmelden-als-mentor', 'PagesController@mentorenAanmelden');
Route::get('/behaalde-resultaten', 'PagesController@resultaten');
Route::get('/over-ons', 'PagesController@overons');
Route::get('/steun-ons', 'PagesController@steunons');
Route::get('/actueel', 'PagesController@actueel');
Route::get('/actueel/{title}-{id}', 'PagesController@doorklikActueel');
Route::auth();

Route::group(['prefix' => 'cms', 'middleware' => ['auth'] ], function () {


// cms routes
	
	// get routes
	Route::get('/', function(){ return view('cms.cms'); });

    Route::get('/logout', function()
	{
		Auth::logout();
		return redirect('/cms');
	});


	Route::get('candidate/mentoren', 'CandidatesController@mentoren');
	Route::get('candidate/jongeren', 'CandidatesController@jongeren');


	// resources controllers
    Route::resource('candidate', 'CandidatesController');
    Route::resource('mentor', 'MentorsController');
    Route::resource('news', 'NewsController');
    Route::resource('youth', 'YouthController');
    Route::resource('page', 'PagesController');
    Route::resource('section', 'PageSectionsController');   
    Route::resource('partner', 'PartnersController');
    Route::resource('teammember', 'TeamMembersController');


    // photo upload routes
    Route::post('/partner/{id}/photos', 'PartnersController@addPhoto');
    Route::post('/section/{id}/photos', 'PageSectionsController@addPhoto');
    Route::post('/news/{id}/photos', 'NewsController@addPhoto');
    Route::post('/youth/{id}/photos', 'YouthController@addPhoto');
    Route::post('/mentor/{id}/photos', 'MentorsController@addPhoto');

});

Route::get('/home', 'HomeController@index');

Route::post('/mail/contact-mail', 'MailController@contactMail');
Route::post('/mail/jongere-mail', 'MailController@jongereMail');
Route::post('/mail/mentor-mail', 'MailController@mentorMail');

Route::post('/newsletters/subscribe', 'NewslettersWebsiteController@addEmail');

Route::get('/aanmeldingen/nieuwe-jongere-aanmelding', 'CandidatesWebsiteController@createJongere');
Route::get('/aanmeldingen/nieuwe-mentor-aanmelding', 'CandidatesWebsiteController@createMentoren');

