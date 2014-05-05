<?php

class ApplicationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$applications = Application::paginate(10);
                return View::make('applications.index')->with('applications', $applications);
	}
}