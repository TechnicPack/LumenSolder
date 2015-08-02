<?php

# app/Models/Author.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Build extends Model {
	public $timestamps = true;

	public function modpack()
	{
		return $this->belongsTo('App\Models\Modpack');
	}

	public function modversions()
	{
		return $this->belongsToMany('App\Models\Modversion')->withTimestamps();
	}
}

?>
