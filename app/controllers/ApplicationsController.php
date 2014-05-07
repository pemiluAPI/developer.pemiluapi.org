<?php

class ApplicationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $query = Input::get('query');
            $applications = Application::leftJoin('users', 'applications.user_id', '=', 'users.id')
                                       ->where('title', 'like', '%'.$query.'%')
                                       ->orWhere('description', 'like', '%'.$query.'%')
                                       ->orWhere('users.name', 'like', '%'.$query.'%')
                                       ->paginate(Config::get('pemiluapi.pagenumber'));
            return View::make('applications.index')->with('query', $query)->with('applications', $applications);
	}
}