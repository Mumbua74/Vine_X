<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        //
        'question' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),

    ];

});
