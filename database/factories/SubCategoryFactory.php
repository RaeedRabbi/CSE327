<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SubCategory;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(SubCategory::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'name' => $faker->name,
        'sku' => $faker->isbn13,
        'details' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
