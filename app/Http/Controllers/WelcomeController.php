<?php

namespace App\Http\Controllers;

use App\Category;
use App\License;
use App\Phone;
use App\Product;
use App\User;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function user($id)
    {
        return User::with(['license', 'phone'])->find($id);
    }

    public function license($id)
    {
        return License::with('user')->find($id);
    }

    public function phone($id)
    {
        return Phone::with('user')->find($id);
    }

    public function manyToMany()
    {
        // Adding Related data

        $products = [
            [
                'name' => 'HP Omen',
                'price' => '81900',
                'description' => 'HP Omen Core i7 9th Gen - (8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650) 15-dc1093TX Gaming Laptop  (15.6 inch, Shadow Black, 2.38 kg)'
            ],
            [
                'name' => 'Apple MacBook Pro ',
                'price' => '224990',
                'description' => 'Apple MacBook Pro Core i9 8th Gen - (16 GB/512 GB SSD/Mac OS Mojave/4 GB Graphics) MV932HN  (15.4 inch, Silver, 1.83 kg)'
            ]
        ];


        // Add product
        $product = Product::create($products[0]);

        // Category Attach
        $categories = Category::find([1, 2]);
        $product->categories()->attach($categories);


        // Retrive from Category
        $category = Category::find(1);
        $category->products;

        // Retrive from 
        $product = Product::find(1);
        $product->categories;

        // Delete Relation
        $category = Category::find(2);
        $product = Product::find(1);
        $product->categories()->detach($category);

        $cat = Category::find(1);
        $cat->products()->create($products[1]);
        return "ok";
    }

    public function category($id)
    {
        $category = Category::with('products')->find($id);
        return $category;
    }

    public function product($id)
    {
        $product = Product::with('categories')->find($id);

        // $product->categories()->sync([1, 2]);
        return Product::with('categories')->find($id);
    }
}
