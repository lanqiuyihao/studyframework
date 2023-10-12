<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Users::class, function (Faker $faker) {
    return [
        'username'  => $faker->userName,
        'truename'  => $faker->name,
        'password'  => bcrypt('admin'),
        'email'     => $faker->email,
        'sex'       => ['先生','女士'][rand(0,1)],
        'phone'     => $faker->phoneNumber,
        'last_ip'   => $faker->ipv4
    ];
});
