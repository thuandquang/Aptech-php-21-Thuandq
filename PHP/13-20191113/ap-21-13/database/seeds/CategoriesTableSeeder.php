<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory :: create();
        for ($i=0; $i <5; $i++) { 
            Categorie::insert([
                'name'=>$faker->name,
                
            ]);
        }
    }
}
