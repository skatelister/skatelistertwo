<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->boolean('available');
			$table->string('category');
			$table->text('description');
			$table->string('image');
			$table->integer('user_id')->unsigned()->length(10);
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('views');
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
		Schema::drop('posts');
	}

}
