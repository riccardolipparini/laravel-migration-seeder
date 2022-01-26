<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'start_year',
        'end_year',
        'number_of_album',
        'number_of_songs'
    ];
}
