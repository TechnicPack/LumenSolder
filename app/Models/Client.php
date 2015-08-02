<?php

# app/Models/Author.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Client extends Model {
	public $timestamps = true;

	public function modpacks()
	{
		return $this->belongsToMany('App\Models\Modpack')->withTimestamps();
	}

}
