<?php
	//	ARRAY FORMA DE DECLARACIÓN 1
	$arrayUno = array('a'=>1,'b'=>2,'c'=>3);
	//	ARRAY FORMA DE DECLARACIÓN 2
	$arrayDos = array("lunes", "martes", "miercoles", "jueves", "viernes");

	echo "FORMA DE DECLARACION 1: EN EL CUAL SE PUEDE DECLARAR LOS SUBINDICES Y LOS VALORES.";
	echo "<br>";

	echo "VALOR arrayUno[a]: ".$arrayUno['a'];
	echo "<br>";
	echo "VALOR arrayUno[b]: ".$arrayUno['b'];
	echo "<br>";
	echo "VALOR arrayUno[c]: ".$arrayUno['c'];
	echo "<br>";
	echo "<br>";

	echo "FORMA DE DECLARACION 2: EN EL CUAL SOLO DECLARO LOS VALORES Y USO LOS SUBINDICES POR DEFECTO.";
	echo "<br>";

	echo "VALOR arrayDos[0]: ".$arrayDos[0];
	echo "<br>";
	echo "VALOR arrayDos[1]: ".$arrayDos[1];
	echo "<br>";
	echo "VALOR arrayDos[2]: ".$arrayDos[2];
	echo "<br>";
	echo "VALOR arrayDos[3]: ".$arrayDos[3];
	echo "<br>";
	echo "VALOR arrayDos[4]: ".$arrayDos[4];
	echo "<br>";

?>