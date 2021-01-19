<?php 

namespace App\Models;

use App\Models\Kecamatan;

class Desa extends Model {
	protected $table = 'wilayah_desa';

	function kecamatan(){
		return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
	}
}