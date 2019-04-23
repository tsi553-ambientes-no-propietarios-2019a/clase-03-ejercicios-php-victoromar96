<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.



*/

	function tituloCentral($variable)
	{
		echo "<h1 style = \"text-align:center\">
		$variable
		</h1>";

	};


	tituloCentral( " Titulo 1 " );
	echo "<br>";
	tituloCentral( " Titulo 2 " );

	
?>