<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'description' => $faker->paragraphs(5, true),
        'Prix' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'quantite' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'updated_at' => $faker->dateTimeBetween('-3 years')
    ];
});

