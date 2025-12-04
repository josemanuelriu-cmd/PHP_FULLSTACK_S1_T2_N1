<?php
	
	$boleanMossegat = IsBitten();

	if ($boleanMossegat) {
		echo "<h1>Charlie em va mossegar el dit!</h1>";
	} 
 	else {
		echo "<h1>Charlie NO em va mossegar el dit!</h1>";
	}

	function IsBitten(){
		$value = rand(1, 100);
		if ($value>=51) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

?>