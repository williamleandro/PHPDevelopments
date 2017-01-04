<?php
	$a = 34;
	$b = 10;
	$c = 10;
	$cont = 0;

	echo "Sabiendo que a = $a / b = $b / c = $c";
	echo "<br>";

	echo "'a' es igual a 'b'?";
	echo "<br>";

	//	IF
	if ($a == $b) {
		echo "'a' y 'b' son iguales.";
		echo "<br>";
	} else {
		echo "'a' y 'b' NO son iguales.";
		echo "<br>";
	}

	echo "<br>";

	echo "Mientras cont sea menor a 20.";
	echo "<br>";

	// WHILE
	while ($cont < 20) {
		echo $cont++;
		echo "<br>";
	}

	echo "<br>";
	echo "Puedo printear el abecedario con un FOR.";
	echo "<br>";

	//	FOR
	for ($i='a'; $i < 'z' ; $i++) {
		echo $i; 
		echo "<br>";
	}
?>