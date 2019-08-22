<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Review;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Review::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
