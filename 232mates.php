<?php
	$numeros = array();
	$mayor = 0;
	$numeros[0] = rand(0, 100);
	$menor = $numeros[0];
	//$menor = PHP_INT_MAX;
	$media = 0;

	for ($i = 0; $i < 33; $i++) {
		$numeros[$i] = rand(0, 100);

		if ($numeros[$i] > $mayor) {
			$mayor = $numeros[$i];
		}
		
		if ($numeros[$i] < $menor) {
			$menor = $numeros[$i];
		}
	}

	foreach ($numeros as $numero) {
		$media += $numero;
	}

	$res = intdiv($media, count($numeros));

	echo "<ul>";

	foreach ($numeros as $numero) {
		echo "<li>$numero</li>";
	}

	echo "</ul>";

	echo "<p>El número mayor es: $mayor</p>";
	echo "<p>El número menor es: $menor</p>";
	echo "<p>La media de los números es: $res</p>";
?>