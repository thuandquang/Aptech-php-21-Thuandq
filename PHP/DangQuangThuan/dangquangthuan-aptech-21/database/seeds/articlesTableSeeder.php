<?php

use App\article;
use Illuminate\Database\Seeder;

class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i <5; $i++) { 
            article::insert([
                'title'=>$faker->name(),
                'title_slug'=>$faker->firstName(),
                'description'=>$faker->realText(200),
            ]);
        }
    }
}
