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
    if (Auth::check())
    {
        Session::flash('alert', 'Anda sudah terdaftar sebagai pengguna.');
        Session::flash('alert_class', 'warning');
        return Redirect::to('/');
    }

    $user = new User;

    return View::make('signup', array('user' => $user));
});

Route::post('/signup', function()
{
	$data = Input::all();

    $rules = array(
        'email' => 'required|email|unique:users',
        'name' => 'required|alpha|min:2',
        'password' => 'required|min:5|same:password_confirmation'
    );

    $validator = Validator::make($data, $rules);

    if ($validator->passes())
    {
        $user = new User;
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->save();

        Session::flash('alert', 'Pendaftaran berhasil. Silahkan login.');
        Session::flash('alert_class', 'success');
        return View::make('login');
    }

    Session::flash('alert', 'Pendaftaran gagal. Silahkan coba lagi.');
    Session::flash('alert_class', 'danger');
    return Redirect::to('/signup')->withErrors($validator)->withInput(Input::except('password'));
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/login', function()
{
    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
    {
        Session::flash('alert', 'Anda berhasil login.');
        Session::flash('alert_class', 'success');
        return Redirect::intended('applications');
    }

    Session::flash('alert', 'Login gagal. Silahkan coba lagi.');
    Session::flash('alert_class', 'danger');
    return Redirect::to('/login')->withInput();
});

Route::get('/logout', function()
{
    Auth::logout();

    return Redirect::to('login');
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

Route::resource('application', 'ApplicationController', array('before' => 'auth'));
