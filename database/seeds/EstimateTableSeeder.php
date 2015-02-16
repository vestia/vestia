<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Vestia\Estimate;

class EstimateTableSeeder extends DatabaseSeeder{

	public function run()
    {
    	/**
    	 * Seed our table
    	 * 
    	 * @return void
    	 */

        $faker = Faker::create();

        Estimate::truncate();
        
        foreach(range(1, 100) as $index)
        {
            Estimate::create([
            	'note_id' => $faker->unique()->numberBetween($min = 1, $max = 100),
            	'median_psf_percent_delta' => $faker->randomFloat($nbMaxDecimals = 2, $min = -0.25, $max = 0.25),
                'calculated_time_of_estimate_value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 500000, $max = 1000000),
                'calculated_current_value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 500000, $max = 1000000)
            ]);
        }

    }

}





?>