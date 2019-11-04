<?php

use Illuminate\Database\Seeder;

class PhoneNumber extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
        {
            $faker = Faker\Factory::create();
            for ($i=0; $i <5 ; $i++) { 
        
                    DB::table('phone')->insert([
                        'Phone_Number'=> $faker->e164PhoneNumber
                        
                    ]);
                
            }
        }
    
}
