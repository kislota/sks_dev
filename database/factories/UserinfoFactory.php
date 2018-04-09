<?php

use Faker\Generator as Faker;

$factory->define(App\Userinfo::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'displayname' => $faker->name,
        'phone' => $faker->phoneNumber,
        'status' => 1,
        'description' => $faker->paragraph,
        'problem' => 0,
    ];
});
