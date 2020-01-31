<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Laptop',
                'description' => 'Electronics Laptop'
            ],
            [
                'name' => 'Gaming Laptop',
                'description' => 'Electronics Gaming Laptop'
            ],
            [
                'name' => 'Professional Laptop',
                'description' => 'Electronics Professional Laptop'
            ]
        ];

        Category::insert($categories);
    }
}
