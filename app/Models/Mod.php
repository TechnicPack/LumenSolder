<?php

# app/Models/Author.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Mod extends Model {
	public $timestamps = true;

	public function versions()
	{
		return $this->hasMany('App\Models\Modversion');
	}
}
