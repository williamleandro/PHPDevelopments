<?php
// Manejo de diferentes variables...

	// COMUNES
	$numero = 450; //Integer
	$letra = 'x'; //Char
	$cadena = "Hola soy una cadena."; //String
	$flotante = 67.98; //Float
	$booleano = true; //Boolean

	echo "Numero: $numero";
	echo "<br>";
	echo "Letra: $letra";
	echo "<br>";
	echo "Cadena: $cadena";
	echo "<br>";
	echo "Flotante: $flotante";
	echo "<br>";
	echo "Booleano: $booleano";
	echo "<br>";

	// VARIABLE VARIABLE
	$variable = "cold";
	$$variable = "turkey";

	echo "Variable: $variable";
	echo "<br>";
	echo "Cold: $cold";
	echo "<br>";
	
	// PUEDO REALIZAR CONSULTAS SI ES UN TIPO DE DATO ESPECIFICO, ME DEVUELVE UN TRUE O FALSE
	echo is_integer($numero);
	echo "<br>";
	echo is_string($cadena);
	echo "<br>";

	// PUEDO OBTENER EL TIPO DE DATO DE UNA VARIABLE
	echo gettype($numero);
	echo "<br>";
	echo gettype($booleano);
	echo "<br>";
	echo gettype($cadena);
	echo "<br>";
?>
