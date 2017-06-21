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
		Movie::create(['name' => 'Baywatch', 'detail' => 'Guardianes de la bahía.']);
		
//		Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
