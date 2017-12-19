<?php

use Faker\Generator as Faker;

$factory->define(\Quality\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'title_fr' => $faker->sentence(),
        'body' => $faker->paragraph(50),
        'body_fr' => $faker->paragraph(),
        'picture' => 'https://picsum.photos/200/250',
    ];
});
