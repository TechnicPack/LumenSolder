<?php

# app/Models/Author.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Modpack extends Model {
	public $timestamps = true;

	public function builds()
	{
		return $this->hasMany('App\Models\Build');
	}

	public function clients()
	{
		return $this->belongsToMany('App\Models\Client')->withTimestamps();;
	}

	public function private_builds()
	{
		$private = false;
		foreach($this->builds as $build){
			if($build->private){
				$private = true;
				break;
			}
		}
		return $private;
	}
}
