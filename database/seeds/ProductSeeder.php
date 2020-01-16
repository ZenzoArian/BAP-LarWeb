<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
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
          $product = new Product();
          $product->title = $faker->text(20);
          $product->description = $faker->text(200);
          $product->price = $faker->randomFloat(2,5,100);
          $product->pub_date = $faker->dateTimeBetween('-10 years', '+5 years');
          $product->save();

        }
    }
}
