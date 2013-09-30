<?php

class ApplicationController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $applications = Auth::user()->applications;

        return View::make('application.index')->with('applications', $applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $application = new Application();
        $application->endpoints = $application->endpoints();

        return View::make('application.create')->with('application', $application);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $rules = array(
            'title' => 'required',
            'endpoints' => 'required'
        );

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $application = new Application;
            $application->title = $data['title'];
            $application->description = $data['description'];
            $application->api_key = md5(uniqid(Auth::user()->email, true));
            $application->user_id = Auth::user()->id;
            $application->endpoints = json_encode($data['endpoints']);
            $application->save();

            Session::flash('alert', 'Pendaftaran berhasil. Silahkan login.');
            Session::flash('alert_class', 'success');
            return Redirect::route('application.index');
        }

        Session::flash('alert', 'Pendaftaran gagal. Silahkan coba lagi.');
        Session::flash('alert_class', 'danger');
        return Redirect::route('application.create')->withErrors($validator)->withInput();
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
        return View::make('application.edit')->with('application', Application::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $data = Input::all();

        $rules = array(
            'title' => 'required',
            'endpoints' => 'required'
        );

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $application = Application::find($id);
            $application->title = $data['title'];
            $application->description = $data['description'];
            $application->endpoints = json_encode($data['endpoints']);
            $application->save();

            Session::flash('alert', 'Edit aplikasi berhasil.');
            Session::flash('alert_class', 'success');
            return Redirect::route('application.index');
        }

        Session::flash('alert', 'Edit aplikasi gagal. Silahkan coba lagi.');
        Session::flash('alert_class', 'danger');
        return Redirect::route('application.edit', $id)->withErrors($validator)->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Application::destroy($id);

        Session::flash('alert', 'Aplikasi berhasil dihapus.');
        Session::flash('alert_class', 'success');
        return Redirect::route('application.index');
    }

}