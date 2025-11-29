<?php
	
	$boleanMossegat = rand(1, 100);	

	if ($boleanMossegat >=51) {
		$boleanMossegat = TRUE;
		echo "Charlie em va mossegar el dit!";
	} 
 	else {
		$boleanMossegat = FALSE;
		echo "Charlie NO em va mossegar el dit!";
	}

?>