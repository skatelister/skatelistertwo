<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		Post::truncate();
		User::truncate();
		$this->call('UsersTableSeeder');
		$this->call('PostsTableSeeder');
	}

}
