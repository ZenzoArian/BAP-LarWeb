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

      for($i = 0; $i < 200; $i++){
        $post = new Post();
        $post->title = $faker->text(20);
        $post->description = $faker->text(400);
        $post->price = $faker->randomFloat(2,5,100);
        $post->pub_date = $faker->dateTimeBetween('-10 years', '+5 years');
        $post->save();

      }
    }
}
