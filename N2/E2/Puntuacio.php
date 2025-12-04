<?php
	
	$punts1 = $_POST["punts1"];		
	$punts2 = $_POST["punts2"];		
	$punts3 = $_POST["punts3"];		

	if (!check($punts1)){
		echo "Error, la primera puntuació ha de tenir un valor entre 0 i 9999";
	}
	elseif (!check($punts2)){
		echo "Error, la segona puntuació ha de tenir un valor entre 0 i 9999";
	}
	elseif (!check($punts3)){
		echo "Error, la tercera puntuació ha de tenir un valor entre 0 i 9999";
	}
 	else {
		$suma = add($punts1, $punts2, $punts3);
		echo "La suma de les puntuacions és $suma<br>";

		$mitjana = average($suma, 3);
		echo "La mitjana de les puntuacions és $mitjana<br>";

		clasification($mitjana);
	}

	function check($value) {
		$boleanValue = is_numeric($value);
		if ($value == '' or !$boleanValue) {
			return FALSE;
		}
		else {
			return TRUE;			
		}
	}

	function add(...$val){
		$n = 0;
		$len = count($val);
		for ($i = 0; $i < $len;$i++){
			$n += $val[$i];
		}
		return $n;
	}

	function average($total, $numbers){
		$average = $total / $numbers;
		return $average;
	}

	function clasification($value){
		if ($value<4000) {
			echo "La classificació és de 'Principiant'";
		}
		elseif($value<8000){
			echo "La classificació és de 'Intermedi'";
		}
		else{
			echo "La classificació és de 'Professional'";
		}
	}

?>