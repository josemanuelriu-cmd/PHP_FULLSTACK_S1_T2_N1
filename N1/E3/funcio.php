<?php
	
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$operacio = $_POST["operacio"];
	
	$bolean1 = is_numeric($num1);
	$bolean2 = is_numeric($num2);
	
	if ($num1 == '' or $num2 == '' ) {
		echo "Error, ha d'indicar els 2 valors";
	} elseif (!$bolean1) {	
		echo "Error, el valor 1 no és un número";
	} elseif (!$bolean2) {	
		echo "Error, el valor 2 no és un número";
	} else {
		$resultat = Calcular($num1, $num2, $operacio);		
		echo "El resultat es igual a $resultat";
	}

	function Calcular($num1, $num2, $operacio){
		if ($operacio == '+' ) {
			$resultat = $num1 + $num2;
		} elseif ($operacio == '-') {
			$resultat = $num1 - $num2;
		} elseif ($operacio == '*') {
			$resultat = $num1 * $num2;
		} else { 
			if ($num2 != 0) {
				$resultat = $num1 / $num2;
			} else {
				$resultat = "infinit";
			}	
		} 
		return $resultat;
	}
?>