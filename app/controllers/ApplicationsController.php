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

            $applications = Application::join('users', 'applications.user_id', '=', 'users.id')
                                ->where('title', 'LIKE', "%{$query}%")
                                ->orWhere('api_key', $query)
                                ->orWhere('description', 'LIKE', "%{$query}%")
                                ->paginate(Config::get('pemiluapi.perPage'));

            return View::make('applications.index')
                        ->with('query', $query)
                        ->with('applications', $applications);
	}
}