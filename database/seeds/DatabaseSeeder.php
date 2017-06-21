<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('movies')->insert([
			['name' => 'El Padrino', 'detail' => 'Alpachino, etc.']
			,['name' => 'Pulp Fiction', 'detail' => 'Ficción, etc.']
			,['name' => 'Batman', 'detail' => 'El vengador!!']
			,['name' => 'Fight Club', 'detail' => 'Pelea, Pelea!!']
			,['name' => 'Inception', 'detail' => 'Que viaje!!']
		]);

		DB::table('movies_users')->insert([
		 ['users_id' => 1, 'movies_id' => 1]
		, ['users_id' => 1, 'movies_id' => 2]
		, ['users_id' => 2, 'movies_id' => 1]
		, ['users_id' => 2, 'movies_id' => 2]
		, ['users_id' => 3, 'movies_id' => 3]
		, ['users_id' => 3, 'movies_id' => 4]
		, ['users_id' => 4, 'movies_id' => 3]
		, ['users_id' => 5, 'movies_id' => 3]
		, ['users_id' => 5, 'movies_id' => 4]
	]);

/*
Crear usuarios
		INSERT INTO users (lastname, name, email) VALUES ('Herrera', 'Alejandro', 'ale@mail.com');
		INSERT INTO users (lastname, name, email) VALUES ('Perez', 'Juan', 'juan@mail.com');
		INSERT INTO users (lastname, name, email)  VALUES ('Lopez', 'Maria', 'maria@mail.com');
		INSERT INTO users (lastname, name, email)  VALUES ('Dougan', 'Vanesa', 'vane@mail.com');


		MoviesUsers::create(['users_id' => 1, 'movies_id' => 1);
		MoviesUsers::create(['users_id' => 1, 'movies_id' => 2);
		MoviesUsers::create(['users_id' => 2, 'movies_id' => 1);
		MoviesUsers::create(['users_id' => 2, 'movies_id' => 2);
		MoviesUsers::create(['users_id' => 3, 'movies_id' => 3);
		MoviesUsers::create(['users_id' => 3, 'movies_id' => 4);
		MoviesUsers::create(['users_id' => 4, 'movies_id' => 3);
		MoviesUsers::create(['users_id' => 5, 'movies_id' => 3);
		MoviesUsers::create(['users_id' => 5, 'movies_id' => 4);
*/

//		Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
