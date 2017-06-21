<?php

namespace App;

class Movie extends base
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail',
    ];

}
