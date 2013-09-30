<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Guzzle\Http\Client;

class Application extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'applications';

    /**
     * Enable soft deletes for the model.
     *
     * @var boolean
     */
    protected $softDelete = true;

    public function endpoints()
    {
        $uri = Config::get('pemiluapi.host');
        $client = new Client($uri);
        $endpoints = $client->get('/endpoints')->send()->json();
        return $endpoints['data'];
    }

}