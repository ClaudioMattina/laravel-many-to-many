<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker -> word();
            $newPost->content = $faker -> paragraph(3,true);
            $newPost->image_url = $faker -> imageUrl(300,300);
            $newPost->date = $faker -> date();
            $newPost->save();
        }
    }
}
