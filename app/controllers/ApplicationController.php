<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('application.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('application.create')->with('application', new Application);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

	    $rules = array('title' => 'required');

	    $validator = Validator::make($data, $rules);

	    if ($validator->passes())
	    {
	        $application = new Application;
	        $application->title = $data['title'];
	        $application->description = $data['description'];
	        $application->api_key = md5(uniqid(Auth::user()->email, true));
            $application->user_id = Auth::user()->id;
	        $application->save();

	        Session::flash('alert', 'Pendaftaran berhasil. Silahkan login.');
	        Session::flash('alert_class', 'success');
	        return Redirect::route('application.index');
	    }

	    Session::flash('alert', 'Pendaftaran gagal. Silahkan coba lagi.');
	    Session::flash('alert_class', 'danger');
	    return Redirect::route('application.create')->withErrors($validator);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}