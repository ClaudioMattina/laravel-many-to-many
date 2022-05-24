<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories=['funny','serius','holiday','adventure','travel','sport','politics'];

        for ($i=0; $i < 6 ; $i++) { 
            $newCategory = new Category();
            $newCategory -> name = $faker-> randomElement(['funny','serius','holiday','adventure','travel','sport','politics']);
            $newCategory -> color = $faker-> unique()->hexColor();
            $newCategory -> save();

        }

    }
}
