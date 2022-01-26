<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
    'publication_year',
    'artist_name',
    'songs'
    ];
}
