<?php
	const NUM_MAX = 50;
	const INICIO = 0;
	const FIN = 99;
	$numeros = [];

	for ($i = 0; $i < NUM_MAX; $i++) {
		$numeros[$i] = rand(INICIO, FIN); // Para añadir elementos al array no hace falta poner $i entre los corchetes, si se deja vacío, se van añadiendo al final.
	}

	//print_r($numeros); // Muestra la posición del array y su valor [posición] => valor

	echo "<ul>";

	/*for ($j = 0; $j < count($numeros); $j++) {
		echo "<li>$numeros[$j]</li>";
	}*/

	foreach ($numeros as $numero) {
		echo "<li>$numero</li>";
	}

	echo "</ul>";
?>