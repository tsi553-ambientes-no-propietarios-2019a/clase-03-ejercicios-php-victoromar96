<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */

	function palabra($variable){
 
        $contarLetras = strlen($variable);
        $Numvocales = substr_count($variable, 'a')+substr_count($variable, 'e')+
                      substr_count($variable, 'i')+substr_count($variable, 'o')+
                      substr_count($variable, 'u')+substr_count($variable, 'A')+
                      substr_count($variable, 'E')+substr_count($variable, 'I')+
                      substr_count($variable, 'O')+substr_count($variable, 'U');

        $a = substr_count($variable, 'a'); 
        $e = substr_count($variable, 'e') ;
        $i = substr_count($variable, 'i'); 
        $o = substr_count($variable, 'o'); 
        $u = substr_count($variable, 'u'); 
        echo "la palabra $variable tiene en total: $contarLetras letras";
        echo ('<br>');
        echo "Numero de vocales en a es: $a <br/>";
        echo "Numero de vocales en e es: $e <br/>";
        echo "Numero de vocales en i es: $i <br/>";
        echo "Numero de vocales en o es: $o <br/>";
        echo "Numero de vocales en u es: $u <br/>";
        echo ('<br>');
        echo "El total de vocales de  la palabra $variable son: $Numvocales";
	}
	
	$variable = 'eucalipto';
	echo palabra($variable);


?>