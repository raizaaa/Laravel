<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'code_customer' => $faker->unique()->randomNumber,
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->address,
        'contact_number' => $faker->tollFreePhoneNumber,
    ];
});
