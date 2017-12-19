<?php

use Faker\Generator as Faker;

$factory->define(\Quality\Speaker::class, function (Faker $faker) {
    return [
        'picture' => 'http://lorempicsum.com/futurama/150/200/5',
        'name' => $faker->name(),
        'title_en' => $faker->jobTitle,
        'title_fr' => $faker->jobTitle,
        'text_en' => $faker->paragraph(20),
        'text_fr' => $faker->paragraph(20),
    ];
});
