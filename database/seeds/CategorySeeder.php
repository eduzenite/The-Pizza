<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Pizzas', 'slug' => 'pizzas', 'description' => 'Here you will find the traditional Italian pizzas with a thin and delicious dough.', 'status' => '1'],
            ['name' => 'Drinks', 'slug' => 'drinks', 'description' => 'To accompany our delicious pizzas, order one of our drinks.', 'status' => '1'],
        ]);
    }
}
