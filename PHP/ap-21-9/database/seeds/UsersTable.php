<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name($gender = null),
                'email' => $faker->email,
                'password' => $faker->password,
                'address' => $faker->streetAddress
                
            ]);
        }
        
    }
}
