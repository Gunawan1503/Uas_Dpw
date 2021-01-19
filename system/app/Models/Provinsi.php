<?php 

namespace App\Models;

use App\Models\Kabupaten;

class Provinsi extends Model {
	protected $table = 'wilayah_provinsi';

	function kabupaten(){
		return $this->hasMany(Kabupaten::class, 'provinsi_id');
	}
}