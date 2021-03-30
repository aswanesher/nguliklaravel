<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'payment_name' => $faker->text,
    ];
});
