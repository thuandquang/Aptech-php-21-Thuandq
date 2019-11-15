<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory :: create();
        for ($i=0; $i < 5 ; $i++) { 
            
        
           
        DB::table('posts')->insert([
            'title' => $faker->realText(50),
            'description' => $faker->realText(50),
            'content' => $faker->realText(50),
        ]);
        }
    
}
}
