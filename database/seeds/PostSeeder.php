<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //200 products generator
      $faker = Faker\Factory::create();

      for($i = 0; $i < 50; $i++){
        $post = new Post();
        $post->user = $faker->text(15);
        $post->title = $faker->text(20);
        $post->description = $faker->text(800);
        $post->seriesA = $faker->numberBetween($min = 1, $max = 5);
        $post->seriesB = $faker->numberBetween($min = 5, $max = 10);
        $post->pub_date = $faker->dateTimeBetween('-10 years', '+5 years');
        $post->save();

      }
    }
}
