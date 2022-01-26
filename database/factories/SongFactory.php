<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'artist_name' => $faker -> name(),
        'publication_year' => $faker -> year(),
        'album' => $faker -> name(),
            
    ];
});


            