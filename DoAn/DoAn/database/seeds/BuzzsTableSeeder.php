<?php

use App\Buzz;
use Illuminate\Database\Seeder;

class BuzzsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i <3; $i++) { 
            Buzz::insert([
                'image'=>$faker->imageUrl($width = 640, $height = 480),
                'name'=>$faker->firstName(),
                'cond'=>$faker->firstName(),
                'price'=>$faker->randomDigit ()
            ]);
        }
    }
}
