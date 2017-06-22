<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('movies')->insert([
			['name' => 'El Padrino', 'detail' => 'Alpachino, etc.'
				, 'updated_at' => \Carbon\Carbon::now()
				, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Pulp Fiction', 'detail' => 'Ficción, etc.'
				, 'updated_at' => \Carbon\Carbon::now()
				, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Batman', 'detail' => 'El vengador!!'
				, 'updated_at' => \Carbon\Carbon::now()
				, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Fight Club', 'detail' => 'Pelea, Pelea!!'
				, 'updated_at' => \Carbon\Carbon::now()
				, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Inception', 'detail' => 'Que viaje!!'
				, 'updated_at' => \Carbon\Carbon::now()
				, 'created_at' => \Carbon\Carbon::now()]
		]);

//Crear usuarios
	DB::table('users')->insert([
		['name' => 'Alejandro'
		, 'lastname' => 'Herrera'
		, 'email' => 'ale@mail.com'
		, 'password' => bcrypt("alejandro")
		, 'updated_at' => \Carbon\Carbon::now()
		, 'created_at' => \Carbon\Carbon::now()]
			]
			,['name' => 'Juan'
			, 'lastname' => 'Perez'
			, 'email' => 'juan@mail.com'
			, 'password' => bcrypt("juan")
			, 'updated_at' => \Carbon\Carbon::now()
			, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Maria'
			, 'lastname' => 'Lopez'
			, 'email' => 'maria@mail.com'
			, 'password' => bcrypt("maria123")
			, 'updated_at' => \Carbon\Carbon::now()
			, 'created_at' => \Carbon\Carbon::now()]
			,['name' => 'Vanesa'
			, 'lastname' => 'Dougan'
			, 'email' => 'vanesa@mail.com'
			, 'password' => bcrypt("vanesa123")
			, 'updated_at' => \Carbon\Carbon::now()
			, 'created_at' => \Carbon\Carbon::now()]
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
//		Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
