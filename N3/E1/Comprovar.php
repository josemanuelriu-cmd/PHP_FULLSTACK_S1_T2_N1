<?php
	
	$number = $_POST["nombre"];	
	$base = $_POST["base"];	
	$MyArray = [];	
	$FinalArray = [];

	if (!check($number) or !check($base)){
		echo "Error, els valors han de ser números amb un valor entre 2 i 9999";
	}	
 	else {
		$FinalArray = SearchNumber($MyArray, $base, $number);		
		ShowArray($FinalArray, $base, $number);
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
	
	function SearchNumber($MyArray, $base, $number){
		
		$MyArray = array_fill(0, $number + 1, true);
		
		for ($i=2; $i*$i<=$number; $i++){
			if ($MyArray[$i]) {
				for ($j=$i*$i; $j<$number; $j += $i) {
					$MyArray[$j] = false;
				}
			}
		}
		$FinalArray = [];
		for ($i=$base ; $i <= $number; $i++){
			if($MyArray[$i]) {
				$FinalArray[] = $i;
			}
		}
		return $FinalArray;		
	}

	function ShowArray($FinalArray, $base, $number){
		echo "<h1>Els números prims entre el $base i el $number son:</h1>";
		echo "<ul>";
		for ($i=0;$i<count($FinalArray); $i++){
			echo "<li>";
			echo $FinalArray[$i];
			echo "</li>";
		}
		echo "</ul>";
	}
?>