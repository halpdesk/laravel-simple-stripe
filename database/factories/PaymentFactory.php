<?php

use Faker\Generator as Faker;
use Halpdesk\LaravelSimpleStripe\Models\Payment;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'payment_id' => $faker->numberBetween(1111,9999),
    ];
});
