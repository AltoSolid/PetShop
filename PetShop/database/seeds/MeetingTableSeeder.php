<?php

use Illuminate\Database\Seeder;
use App\Meeting;

class MeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Meeting::class, 8)->create();
        foreach (Meeting::all() as $meeting) {
            $users = \App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $meeting->users()->attach($users);
        }
    }
}
