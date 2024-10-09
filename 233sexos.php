<?php
	$generos = array();

	// Se rellena el array con 100 valores aleatorios 'M' o 'F'
	for ($i = 0; $i < 100; $i++) {
		$generos[$i] = rand(0, 1) == 0 ? 'M' : 'F';
	}

	// Inicializamos el array asociativo para contar los elementos
	$contador = array('M' => 0, 'F' => 0);

	// Se recorre el array $generos y aumentamos el contador de cada valor en el array $contador
	foreach ($generos as $genero) {
		$contador[$genero]++;
	}

	print_r($generos);

	echo "<p>Cantidad de M: " . $contador['M'] . "</p>";
	echo "<p>Cantidad de F: " . $contador['F'] . "</p>";
?>