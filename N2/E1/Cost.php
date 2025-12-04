<?php
	
	$time = $_POST["durada"];		
	$boleanTime = is_numeric($time);	

	if ($time == '' or !$boleanTime) {
		echo "Error, ha d'introduir un valor numéric";
	} 
 	else {
		$preu = Durada($time);
		
		echo "El preu de la trucada es de $preu centims";
	}

	function Durada($minutes){
		if ($minutes <=3) {
			$price = 10;			
		}
		else {
			$extra = $minutes-3;
			$price = 10 + ($extra*5);
		}
		return $price;
	}

?>