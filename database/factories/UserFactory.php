<?php

use Faker\Generator as Faker;
use App\Models\User;
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'password' => bcrypt('password'),
        'email_verification_at' => Carbon\Carbon::now()
    ];
});
