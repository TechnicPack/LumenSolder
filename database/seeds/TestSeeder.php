<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Build;
use App\Models\Modversion;

class TestSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('UserTableSeeder');
		$this->call('ModTableTestSeeder');
		$this->call('ModpackTableTestSeeder');
		$this->call('ClientTableTestSeeder');
		$this->call('KeyTableTestSeeder');
	}

}
