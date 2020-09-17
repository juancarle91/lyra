<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'titulo' => $faker->realText(15),
        'texto' => $faker->realText(50),
        'boton' => $faker->realText(10),
        'foto' => 'https://picsum.photos/2000',
        'link' => '#'
    ];
});
