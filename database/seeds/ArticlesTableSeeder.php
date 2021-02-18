<?php

use Illuminate\Database\Seeder;

use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $date = $faker->datetime();
            
            $article = new Article();
            $article->title = $faker->sentence(2);
            $article->subtitle = $faker->sentence(10);
            $article->text = $faker->text(2500);
            $article->author = $faker->name();
            $article->created_at = $date;
            $article->updated_at = $date;
            $article->save();
        }
    }
}
