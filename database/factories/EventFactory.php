<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $at = $faker->dateTimeThisMonth;
    return [
        'user_id' => $faker->randomDigitNot(0),
        'name' => 'サンプルイベント',
        'starts_at' => $at->format('Y-m-d 10:00:00'),
        'ends_at' => $at->format('Y-m-d 19:00:00'),
    ];
});