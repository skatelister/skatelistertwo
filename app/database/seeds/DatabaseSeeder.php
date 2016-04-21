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
		DB::table('users')->truncate();
		User::truncate();
		$this->call('UsersTableSeeder');
	}

}
