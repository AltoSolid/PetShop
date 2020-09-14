<?php

use Illuminate\Database\Seeder;
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
        factory(Product::class, 8)->create();
        
        foreach (Product::all() as $product) {
            $orders = \App\Order::inRandomOrder()->take(rand(1,5))->pluck('id');
            foreach ($orders as $order) {
                $product->orders()->attach($order, ['quantity' => rand(1,10)]);
            }
        }        
    }
}
