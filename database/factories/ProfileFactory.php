<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'question' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
