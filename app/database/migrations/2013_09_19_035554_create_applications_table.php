<?php

use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function($table)
        {
            $table->increments('id');
            $table->string('title', 128);
            $table->text('description');
            $table->string('api_key', 32);
            $table->integer('user_id');
            $table->string('endpoints');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applications');
	}

}