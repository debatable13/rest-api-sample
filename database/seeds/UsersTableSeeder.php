<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        factory(User::class, 10)->create();
    }
}