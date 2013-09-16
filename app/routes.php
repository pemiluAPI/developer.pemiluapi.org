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
	return View::make('home');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/signup', function()
{
	return View::make('signup');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/delete', function()
{
	return View::make('delete');
});

Route::get('/account-overview', function()
{
	return View::make('account-overview');
});

Route::get('/endpoints', function()
{
	return View::make('endpoints');
});

Route::get('/applications', function()
{
	return View::make('applications');
});

Route::get('/add-application', function()
{
	return View::make('add-application');
});

Route::get('/edit-application', function()
{
	return View::make('edit-application');
});
