<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PersonasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('personas')->insert(array(
			'nombre'=>'Norwin',
			'apellido'=>'Guerrero',
			'direccion'=>'Nicaragua',
			'telefono'=>'78894556',
			'edad'=>22
			));

		DB::table('personas')->insert(array(
			'nombre'=>'taller',
			'apellido'=>'laravel',
			'direccion'=>'Nicaragua',
			'telefono'=>'78894556',
			'edad'=>2
			));
	}

}