<?php 

namespace App\Models;

use App\Models\Desa;
use App\Models\Kabupaten;

class Kecamatan extends Model {
	protected $table = 'wilayah_kecamatan';

	function desa(){
		return $this->hasMany(Desa::class, 'desa_id');
	}

	function kabupaten(){
		return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
	}
}