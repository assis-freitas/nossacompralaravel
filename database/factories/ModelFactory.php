<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Grupo::class, function (Faker\Generator $faker) {
    return [
        'gru_nome' => $faker->name,
        'usu_codigo' =>App\User::find(1)->id,
    ];
});

$factory->define(App\Lista::class, function (Faker\Generator $faker) {
    return [
        'gru_codigo'       => App\Grupo::where('gru_codigo', 1)->first()->gru_codigo,
        'lis_nome'         => $faker->name,
        'lis_data_inicial' => $faker->date,
        'lis_data_final'   => $faker->date,
    ];
});