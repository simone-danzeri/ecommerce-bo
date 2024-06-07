<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newProduct = new Product();
            $newProduct->title = $faker->sentence(3);
            $newProduct->description = $faker->text(600);
            $newProduct->price = $faker->randomFloat(2, 1, 999999);
            $newProduct->is_available = $faker->boolean();
            $newProduct->weight = $faker->numberBetween(0, 500);
            $newProduct->quantity = $faker->numberBetween(0, 2000);
            $newProduct->save();
        }
    }
}
