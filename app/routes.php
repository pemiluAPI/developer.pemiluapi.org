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
    return View::make('about');
});

Route::group(array('prefix' => 'api'), function()
{
    Route::get('authenticate', function()
    {
        $apiKey = Input::get('apiKey');

        $application = Application::where('api_key', '=', $apiKey)->count();

        switch ($application) {
            case true:
                $data = array(
                    'data' => array(
                        'message' => 'ok'
                    )
                );

                $status = 200;
                break;

            case false:
                $data = array(
                    'error' => array(
                        'type' => 'invalid_request_error'
                    )
                );

                $status = 401;
                break;
        }

        return Response::json($data, $status);
    });

    Route::get('application', function()
    {
        $apiKey = Input::get('apiKey');

        $application = Application::where('api_key', '=', $apiKey)->first();

        switch ($application) {
            case true:
                $data = array(
                    'data' => array(
                        'title' => $application->title
                    )
                );

                $status = 200;
                break;

            case false:
                $data = array(
                    'error' => array(
                        'type' => 'invalid_request_error'
                    )
                );

                $status = 401;
                break;
        }

        return Response::make($data, $status);
    });
});

Route::get('/about', function()
{
    return View::make('about');
});

Route::get('/documentation', function()
{
    return View::make('documentation');
});

Route::get('/terms', function()
{
    return View::make('terms');
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

    $messages = array(
        'required' => 'Tidak boleh kosong.',
        'email' => 'Harus menggunakan format alamat e-mail.',
        'alpha' => 'Hanya dapat berisi huruf.',
        'unique' => 'Alamat email telah digunakan.',
        'min' => 'Harus minimal :min karakter.',
        'same' => 'Password dan konfirmasi password harus sama.'

    );

    $validator = Validator::make($data, $rules, $messages);

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
        return Redirect::intended('application');
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

Route::get('/endpoints', function()
{
    $application = new Application();
    $endpoints = $application->endpoints();

    return View::make('endpoints')->with('endpoints', $endpoints);
});

Route::group(array('before' => 'auth'), function()
{
    Route::resource('application', 'ApplicationController');

    Route::get('/account/delete', function()
    {
        return View::make('account.delete');
    });

    Route::delete('/account/delete', function()
    {
        // Delete owned applications
        Application::where('user_id', '=', Auth::user()->id)->delete();

        // Delete the account
        User::destroy(Auth::user()->id);

        // Logged her out
        return Redirect::to('logout');
    });

    Route::get('/account', function()
    {
        $applications = Auth::user()->applications;

        return View::make('account.index')->with('applications', $applications);;
    });
});
