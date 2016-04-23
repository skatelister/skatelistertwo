<?php

class PostsTableSeeder extends Seeder {
	
	public function run() 
	{
		$faker = Faker::create('en_US');
		foreach (range(1, 5) as $index)
		{
			Post::create([
					'title' 		=> $faker->sentence,
					'description'  	=> $faker->text,
					'category'		=> $faker->numberBetween(1, 5),
					'image'			=> $faker->imageUrl(400, 200, 'technics'),
				]); 
		}
	}
}