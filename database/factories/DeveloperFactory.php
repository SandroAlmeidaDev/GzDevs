<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'sexo' => $faker->sexo,
        'idade' => $faker->idade,
        'hobby' => $faker->hobby,
        'datanascimento' => $faker->datanascimento,
    ];
});
