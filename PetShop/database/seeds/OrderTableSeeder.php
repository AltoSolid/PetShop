<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 8)->create(); 
    }
}
