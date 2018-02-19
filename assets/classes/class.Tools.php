<?php 

class Tools {
	
	public static function numberFormat($number) {
		
			return number_format($number , 0, ',', '.');
	}

}

?>