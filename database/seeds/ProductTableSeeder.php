<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Brahama',
                'slug' => 'brahama',
                'description' => 'lorem ipsum dolor de dollores doliendo',
                'extract' => 'lorem ipsum dolor de dollores doliendo',
                'price' => 275.00,
                'image' => 'http://lorempixel.com/400/200/animals',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Corona',
                'slug' => 'corona',
                'description' => 'lorem ipsum dolor de dollores doliendo',
                'extract' => 'lorem ipsum dolor de dollores doliendo',
                'price' => 300.00,
                'image' => 'http://lorempixel.com/400/200/animals',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Bono bon',
                'slug' => 'bono-bon',
                'description' => 'lorem ipsum dolor de dollores doliendo',
                'extract' => 'lorem ipsum dolor de dollores doliendo',
                'price' => 75.00,
                'image' => 'http://lorempixel.com/400/200/animals',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Mr potato',
                'slug' => 'papas',
                'description' => 'lorem ipsum dolor de dollores doliendo',
                'extract' => 'lorem ipsum dolor de dollores doliendo',
                'price' => 5.00,
                'image' => 'http://lorempixel.com/400/200/animals',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2   
            ],
        );
        Product::insert($data);
    }
}