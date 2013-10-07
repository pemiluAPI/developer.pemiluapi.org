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

    public static $factory = array(
        'title' => 'string',
        'description' => 'text',
        'api_key' => 'string',
        'user_id' => 'factory|User',
        'endpoints' => 'string',
    );

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function endpoints()
    {
        $uri = Config::get('pemiluapi.host');
        $client = new Client($uri, array(
            'request.options' => array(
                'query' => array('apiKey' => md5('PemiluAPI Developer'))
            )
        ));
        $endpoints = $client->get('/endpoints')->send()->json();
        return $endpoints['data'];
    }

}