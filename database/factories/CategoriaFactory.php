<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'titulo' => $faker->realText(15),
        'descripcion' => $faker->realText(150),
        'foto' => 'https://picsum.photos/300',
        'visible_home' => true
    ];
});
