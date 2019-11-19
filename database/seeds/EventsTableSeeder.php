<?php

use Illuminate\Database\Seeder;
use App\Event;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        Event::truncate();

        factory(Event::class, 30)->create();
    }
}