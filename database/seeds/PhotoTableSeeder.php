<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Photo;

class PhotoTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Photo::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Photo::create([
            	'small_url' => $faker->imageUrl('640', '480', 'city'),
                'medium_url' => $faker->imageUrl('1024', '768', 'city'),
                'large_url' => $faker->imageUrl('1280', '1024', 'city'),
                'original_url' => $faker->imageUrl('1920', '1080', 'city'),
                'imageable_id' => $faker->numberBetween($min = 1, $max = 100),
                'imageable_type' => 'update'
            ]);
        }

        foreach(range(1, 100) as $index)
        {
            Photo::create([
                'small_url' => $faker->imageUrl('640', '480', 'nature'),
                'medium_url' => $faker->imageUrl('1024', '768', 'nature'),
                'large_url' => $faker->imageUrl('1280', '1024', 'nature'),
                'original_url' => $faker->imageUrl('1920', '1080', 'nature'),
                'imageable_id' => $faker->numberBetween($min = 1, $max = 100),
                'imageable_type' => 'space'
            ]);
        }

    }

}





?>