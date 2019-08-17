<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Category::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'name' => $faker->name,
        'sku' => $faker->numerify('Hello ###'),
        'details' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'created_at' => $now,
        'updated_at' => $now
    ];
});
