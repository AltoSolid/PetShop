<?php

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
        $this->call(UserTableSeeder::class);        
        $this->call(MeetingTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PetTableSeeder::class);
    }
}
