<?php 

namespace App\Services;

class TimeServices {
	public function ShowTimeNow(){
		return date("H:i:s");
	}

}