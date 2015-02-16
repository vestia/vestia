<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\User;

class OwnersTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();
        $users = User::all();

        $home_ids = array();
        foreach(range(1, 20) as $index){
            $home_ids[] = $index;
        }
       
        foreach($users as $user)
        {
            $user->owns()->sync($faker->randomElements($array = $home_ids, $count = $faker->numberBetween($min = 1, $max = 2)));
        }

    }

}





?>