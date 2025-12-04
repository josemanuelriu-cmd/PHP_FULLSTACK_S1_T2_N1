<?php
	
	$num = $_POST["num"];
	$increment = $_POST["increment"];
	$resultat;
		
	$boleanNum = is_numeric($num);
	$boleanIncrement = is_numeric($increment);	

	if ($num == '') {
		$num = 10;
		$boleanNum = true;
	} 

	if ($increment == '') {
		$increment = 1;
		$boleanIncrement = true;
	}
	if (!$boleanNum ) {	
		echo "Error, el valor no és un número";	
	}
	elseif (!$boleanIncrement) {
		echo "Error, l'increment no és un número valid";	
	} else {
		ShowList($num, $increment);	
	}

	function ShowList($num, $increment){
		echo "El número fins a on comptar es $num <br>";
		echo "L'increment es de $increment <br><br>";
		for ($resultat = 1; $resultat <= $num; $resultat+=$increment) {
			echo "El número es: $resultat<br>";
		}
		
	}

?>