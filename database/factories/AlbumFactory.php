<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
            
            'publication_year' => $faker -> year(),
            'artist_name' => $faker -> name(),
            'songs' => $faker -> numberBetween(1, 20),
            
    ];
});

            