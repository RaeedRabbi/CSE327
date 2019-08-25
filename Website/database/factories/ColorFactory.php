<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Color;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Color::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'color' => $faker->hexcolor,
        'created_at' => $now,
        'updated_at' => $now
    ];
});
