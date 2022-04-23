<?php

namespace Database\Seeders;

use \App\Models\Product;
use \App\Models\Category;
use \App\Models\Image;
use \App\Models\Order;
use \App\Models\Question;
use \App\Models\Payout;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $products = Product::factory(10)->create();
        $categories = Category::factory(5)->create();
        $images = Image::factory(10)->create();
        $orders = Order::factory(4)->create();
        $questions = Question::factory(3)->create();
        $payouts = Payout::factory(4)->create();
    }
}
