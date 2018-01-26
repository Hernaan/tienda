<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;
class CategoryTableSeeder extends Seeder
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
                'name' => 'Bebidas',
                'slug' => 'bebidas',
                'description' => 'lorem ipsum dolor de dollores doliendo',
                'marca' => '#440022'
            ],
            [
                'name' => 'Comestibles',
                'slug' => 'comestibles-comida',
                'description' => 'lorem ipsum dolor del dolor de dolores',
                'marca' => '#445500'
            ]
        );
        Category::insert($data);
    }
}