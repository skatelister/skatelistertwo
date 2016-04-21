<?php

class UsersTableSeeder extends Seeder {
	public function run() 
	{
		$user = new User;
		$user->first_name = 'Shireen';
		$user->last_name = 'McDonald';
		$user->email = 'shireen@email.com';
		$user->password = 'password';
		$user->save();
	}
}