<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
          $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function wachedBy()
    {

      $watched = DB::select( DB::raw("SELECT DISTINCT
            CASE WHEN u1.name > u2.name THEN u1.name ELSE u2.name END Uno,
            CASE WHEN u1.name < u2.name THEN u1.name ELSE u2.name END Dos
          FROM users u1, users u2
          WHERE u1.id != u2.id AND
          NOT EXISTS (
            SELECT *
            FROM movies_users mu1
            WHERE mu1.users_id = u1.id AND mu1.movies_id NOT IN (
              SELECT mu2.movies_id FROM movies_users mu2
              WHERE mu2.users_id = u2.id
            )
          ) AND
          NOT EXISTS (
            SELECT *
            FROM movies_users mu1
            WHERE mu1.users_id = u2.id AND mu1.movies_id NOT IN (
              SELECT mu2.movies_id FROM movies_users mu2
              WHERE mu2.users_id = u1.id
            )
          )") );

      return view('movies.watched', compact('watched'));
    }

    public function create()
    {
        return view('movies.index');
    }
}
