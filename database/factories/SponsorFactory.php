<?php

use Faker\Generator as Faker;

$factory->define(\Quality\Sponsor::class, function (Faker $faker) {
    $rank = ['gold', 'silver', 'bronze'];
    
    return [
        'picture' => 'https://picsum.photos/200/200',
        'link' => $faker->url(),
        'rank' => $rank[rand(0,2)],
        'name' => $faker->company,
        'description' => $faker->paragraph(10),
    ];
});
