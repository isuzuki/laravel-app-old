<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitializeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artist', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->timestamp('deleted_at');
		});

		Schema::create('discography', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('artist_id')->unsigned();
			$table->timestamps();
			$table->timestamp('deleted_at');

			$table->foreign('artist_id')->references('id')->on('artist');
		});

		Schema::create('music', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('discography_id')->unsigned();
			$table->timestamps();
			$table->timestamp('deleted_at');

			$table->foreign('discography_id')->references('id')->on('discography');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('music');
		Schema::drop('discography');
		Schema::drop('artist');
	}

}
