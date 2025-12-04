<?php
	
	$nota = $_POST["nota"];		
	$boleanNota = is_numeric($nota);	

	if ($nota == '' or !$boleanNota or $nota>100 or $nota<=0) {
		echo "Error, ha d'introduir un valor numéric del 1 al 100.";
	} 
 	else {
		ShowNote($nota);
	}

	function ShowNote($nota){
		if ($nota>=60) {
			echo "El grau es de Primera Divisió";
		}
		elseif ($nota>=45) {
			echo "El grau es de Segona Divisió";
		}
		elseif ($nota>=33) {
			echo "El grau es de Tercera Divisió";
		}
		else {
			echo "L'estudiant reprovarà";
		}
	}

?>