<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

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

}