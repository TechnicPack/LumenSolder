<?php

# app/Models/Author.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Modversion extends Model {
	protected $table = 'modversions';
	public $timestamps = true;

	public function mod()
	{
		return $this->belongsTo('App\Models\Mod');
	}

	public function builds()
	{
		return $this->belongsToMany('App\Models\Build')->withTimestamps();
	}
}

?>
