<?php

use Illuminate\Database\Seeder;

use App\Models\Modpack;
use App\Models\Modversion;
use App\Models\Build;

class ModpackTableTestSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('modpacks')->delete();

		$testmodpack = Modpack::create(array('name' => 'TestModpack',
							'slug' => 'testmodpack',
							'icon' => false,
							'icon_md5' => 'fb6582e4d9c9bc208181907ecc108eb1',
							'icon_url' => env('SOLDER_MIRROR_URL').'resources/default/icon.png',
							'logo' => false,
							'logo_md5' => 'fb6582e4d9c9bc208181907ecc108eb1',
							'logo_url' => env('SOLDER_MIRROR_URL').'resources/default/logo.png',
							'background' => false,
							'background_md5' => 'fb6582e4d9c9bc208181907ecc108eb1',
							'background_url' => env('SOLDER_MIRROR_URL').'resources/default/background.jpg',
							));

		DB::table('builds')->delete();

		$testbuild = Build::create(array('modpack_id' => $testmodpack->id,
							'version' => '1.0.0',
							'minecraft' => '1.7.10',
							'minecraft_md5' => 'e6b7a531b95d0c172acb704d1f54d1b3',
							'min_java' => '1.7',
							'min_memory' => '1024',
							'is_published' => true
							));

		$testbuild->modversions()->attach(1);
	}

}
