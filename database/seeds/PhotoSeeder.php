<?php

use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::insert([
            ['title' => 'Tuna fish', 'url' => '/storage/pizzas/pizza-atum-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-atum-1.jpg', 'product_id' => '1'],
            ['title' => 'Tuna fish', 'url' => '/storage/pizzas/pizza-atum-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-atum-2.jpg', 'product_id' => '1'],
            ['title' => 'Tuna fish', 'url' => '/storage/pizzas/pizza-atum-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-atum-3.jpg', 'product_id' => '1'],
            ['title' => 'Tuna fish', 'url' => '/storage/pizzas/pizza-atum-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-atum-4.jpg', 'product_id' => '1'],

            ['title' => 'Bacon', 'url' => '/storage/pizzas/pizza-bacon-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-bacon-1.jpg', 'product_id' => '2'],
            ['title' => 'Bacon', 'url' => '/storage/pizzas/pizza-bacon-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-bacon-2.jpg', 'product_id' => '2'],
            ['title' => 'Bacon', 'url' => '/storage/pizzas/pizza-bacon-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-bacon-3.jpg', 'product_id' => '2'],
            ['title' => 'Bacon', 'url' => '/storage/pizzas/pizza-bacon-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-bacon-4.jpg', 'product_id' => '2'],

            ['title' => 'Capricciosa', 'url' => '/storage/pizzas/pizza-capricciosa-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-capricciosa-1.jpg', 'product_id' => '3'],
            ['title' => 'Capricciosa', 'url' => '/storage/pizzas/pizza-capricciosa-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-capricciosa-2.jpg', 'product_id' => '3'],
            ['title' => 'Capricciosa', 'url' => '/storage/pizzas/pizza-capricciosa-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-capricciosa-3.jpg', 'product_id' => '3'],
            ['title' => 'Capricciosa', 'url' => '/storage/pizzas/pizza-capricciosa-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-capricciosa-4.jpg', 'product_id' => '3'],

            ['title' => 'Diavola', 'url' => '/storage/pizzas/pizza-diavola-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-diavola-1.jpg', 'product_id' => '4'],
            ['title' => 'Diavola', 'url' => '/storage/pizzas/pizza-diavola-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-diavola-2.jpg', 'product_id' => '4'],
            ['title' => 'Diavola', 'url' => '/storage/pizzas/pizza-diavola-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-diavola-3.jpg', 'product_id' => '4'],
            ['title' => 'Diavola', 'url' => '/storage/pizzas/pizza-diavola-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-diavola-4.jpg', 'product_id' => '4'],

            ['title' => 'Loin', 'url' => '/storage/pizzas/pizza-lombo-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-lombo-1.jpg', 'product_id' => '5'],
            ['title' => 'Loin', 'url' => '/storage/pizzas/pizza-lombo-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-lombo-2.jpg', 'product_id' => '5'],
            ['title' => 'Loin', 'url' => '/storage/pizzas/pizza-lombo-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-lombo-3.jpg', 'product_id' => '5'],
            ['title' => 'Loin', 'url' => '/storage/pizzas/pizza-lombo-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-lombo-4.jpg', 'product_id' => '5'],

            ['title' => 'Marguerita', 'url' => '/storage/pizzas/pizza-marguerita-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-marguerita-1.jpg', 'product_id' => '6'],
            ['title' => 'Marguerita', 'url' => '/storage/pizzas/pizza-marguerita-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-marguerita-2.jpg', 'product_id' => '6'],
            ['title' => 'Marguerita', 'url' => '/storage/pizzas/pizza-marguerita-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-marguerita-3.jpg', 'product_id' => '6'],
            ['title' => 'Marguerita', 'url' => '/storage/pizzas/pizza-marguerita-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-marguerita-4.jpg', 'product_id' => '6'],

            ['title' => 'Parmigiana', 'url' => '/storage/pizzas/pizza-parmiggiana-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-parmiggiana-1.jpg', 'product_id' => '7'],
            ['title' => 'Parmigiana', 'url' => '/storage/pizzas/pizza-parmiggiana-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-parmiggiana-2.jpg', 'product_id' => '7'],
            ['title' => 'Parmigiana', 'url' => '/storage/pizzas/pizza-parmiggiana-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-parmiggiana-3.jpg', 'product_id' => '7'],
            ['title' => 'Parmigiana', 'url' => '/storage/pizzas/pizza-parmiggiana-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-parmiggiana-4.jpg', 'product_id' => '7'],

            ['title' => 'Portuguese', 'url' => '/storage/pizzas/pizza-portuguesa-1.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-portuguesa-1.jpg', 'product_id' => '8'],
            ['title' => 'Portuguese', 'url' => '/storage/pizzas/pizza-portuguesa-2.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-portuguesa-2.jpg', 'product_id' => '8'],
            ['title' => 'Portuguese', 'url' => '/storage/pizzas/pizza-portuguesa-3.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-portuguesa-3.jpg', 'product_id' => '8'],
            ['title' => 'Portuguese', 'url' => '/storage/pizzas/pizza-portuguesa-4.jpg', 'thumbnail' => '/storage/pizzas/thumbnail/pizza-portuguesa-4.jpg', 'product_id' => '8'],


            ['title' => 'Coke', 'url' => '/storage/drinks/coke-1.jpg', 'thumbnail' => '/storage/drinks/thumbnail/coke-1.jpg', 'product_id' => '9'],
            ['title' => 'Coke', 'url' => '/storage/drinks/coke-2.jpg', 'thumbnail' => '/storage/drinks/thumbnail/coke-2.jpg', 'product_id' => '9'],
            ['title' => 'Coke', 'url' => '/storage/drinks/coke-3.jpg', 'thumbnail' => '/storage/drinks/thumbnail/coke-3.jpg', 'product_id' => '9'],
            ['title' => 'Coke', 'url' => '/storage/drinks/coke-4.jpg', 'thumbnail' => '/storage/drinks/thumbnail/coke-4.jpg', 'product_id' => '9'],

            ['title' => 'Beer', 'url' => '/storage/drinks/beer-1.jpg', 'thumbnail' => '/storage/drinks/thumbnail/beer-1.jpg', 'product_id' => '10'],
            ['title' => 'Beer', 'url' => '/storage/drinks/beer-2.jpg', 'thumbnail' => '/storage/drinks/thumbnail/beer-2.jpg', 'product_id' => '10'],
            ['title' => 'Beer', 'url' => '/storage/drinks/beer-3.jpg', 'thumbnail' => '/storage/drinks/thumbnail/beer-3.jpg', 'product_id' => '10'],
            ['title' => 'Beer', 'url' => '/storage/drinks/beer-4.jpg', 'thumbnail' => '/storage/drinks/thumbnail/beer-4.jpg', 'product_id' => '10'],

            ['title' => 'Juice', 'url' => '/storage/drinks/juice-1.jpg', 'thumbnail' => '/storage/drinks/thumbnail/juice-1.jpg', 'product_id' => '11'],
            ['title' => 'Juice', 'url' => '/storage/drinks/juice-2.jpg', 'thumbnail' => '/storage/drinks/thumbnail/juice-2.jpg', 'product_id' => '11'],
            ['title' => 'Juice', 'url' => '/storage/drinks/juice-3.jpg', 'thumbnail' => '/storage/drinks/thumbnail/juice-3.jpg', 'product_id' => '11'],
            ['title' => 'Juice', 'url' => '/storage/drinks/juice-4.jpg', 'thumbnail' => '/storage/drinks/thumbnail/juice-4.jpg', 'product_id' => '11'],

        ]);
    }
}
