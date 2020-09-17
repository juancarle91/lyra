<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name(),
        'descripcion' => $faker->paragraph(),
        'precio' => 30,
        'foto' => 'https://picsum.photos/300',
        'visible_en' => 'Si',
        'categoria_id' => 1,
    ];
});
