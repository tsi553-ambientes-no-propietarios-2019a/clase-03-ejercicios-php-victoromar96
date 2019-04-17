<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

		for ($i = 1;$i <= 10;$i++){
			echo "<br>$i"."*"."2"."=".$i*2;
		}

		echo "<br>";
		echo "<br>";
		echo "<br>";

		$j = 1;
		while($j <= 10){
			$k = $j*2;
			echo "2 * $j = $k <br>";
			$j++;
		}


		echo "<br>";
		echo "<br>";
		echo "<br>";

		$n = 0; 
		do { 
			$n++; 
			echo "<br>". '2'. "*".$n. "=".($n*2); 
		} while ($n <10);  
		

?>