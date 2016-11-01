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

// route to about page
Route::get('about', ['as'=>'about', 'uses'=>'PagesController@getAbout'], 'PagesController@getAbout');

// route to contact page
Route::get('contact', ['as'=>'contact', 'uses'=>'PagesController@getContact'], 'PagesController@getContact');

// route to index
Route::get('/', ['as'=>'home', 'uses'=>'PagesController@getIndex'], 'PagesController@getIndex');

// restful route to post crud
Route::resource('posts', 'PostController');

// route for controlling slug
Route::get('/blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

// route for displaying all blog posts
Route::get('/blog', ['as'=>'blog.index', 'uses'=>'BlogController@getIndex']);

// AUTH ROUTS
// Get login
Route::get('auth/login', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);

// Submit login
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Logout
Route::get('auth/logout', ['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);

// REGISTRATION ROUTES
// Get registration form
Route::get('auth/register', 'Auth\AuthController@getRegister');

// Submit registration
Route::post('auth/register', 'Auth\AuthController@postRegister');