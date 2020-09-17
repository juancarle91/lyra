<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name(),
        'texto1' => $faker->paragraph(),
        'texto2' => $faker->paragraph(),
        'foto' => 'https://picsum.photos/300'
    ];
});
