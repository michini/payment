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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class,function(Faker\Generator $faker){

    return[
        'dni'       =>  $faker->randomNumber(8),
        'name'      =>  $faker->name,
        'email'     =>  $faker->email,
        'address'   =>  $faker->streetAddress,
        'type_home' =>  $faker->randomElement(['casa','oficina','departamento','alquilado']),
        'number_phone_home' =>  $faker->phoneNumber,
        'number_phone_familiar' =>  $faker->phoneNumber,
        'number_phone_neighbour'    =>  $faker->phoneNumber,
        'number_phone_personal' =>  $faker->phoneNumber,
        'password'  =>  bcrypt('123456')
    ];
});