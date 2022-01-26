<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
            'name' => $faker -> name(),
            'start_year' => $faker -> year(),
            'end_year' => $faker -> year(),
            'number_of_album' => $faker -> numberBetween(1, 20),
            'number_of_songs' => $faker -> numberBetween(1, 100)
    ];
});
