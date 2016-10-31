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