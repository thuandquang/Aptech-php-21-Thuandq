<?php
use App\Categorie;
use App\Post;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_categories = Categorie::get()->pluck('id')->toArray();
        
        $array_posts = Post::get()->pluck('id')->toArray();
        // dd($array_categories[array_rand($array_categories)]);
        for ($i = 0; $i < 5; $i++) {
            DB::table('categorie_post')->insert(
                [
                    'category_id' => $array_categories[array_rand($array_categories)],
                    'post_id' => $array_posts[array_rand($array_posts)]
                ]
            );
        }
        }
}
