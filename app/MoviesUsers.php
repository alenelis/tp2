<?php

namespace App;

class MoviesUsers extends base
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id', 'movies_id',
    ];

}
