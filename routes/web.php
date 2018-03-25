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

Route::group(['prefix' => LaravelLocalization::setLocale(),
			'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	
	Route::get('/about-us', ['as' => 'welcome', 'uses' => 'WelcomeController@index']);
	Route::get('/logout', 'Auth\LoginController@logout');
	Route::get('/dashboard', ['as' => 'home', 'uses' => 'HomeController@index']);
	Route::get('/', ['as' => 'ico', 'uses' => 'InformationController@index']);
	Auth::routes();



});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

//Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::post('/subscribe', ['as' => 'tellus.subscribe', 'uses' => 'InformationController@subscribe']);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
