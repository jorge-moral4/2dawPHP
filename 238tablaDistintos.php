<?php
	$filas = 6;
	$columnas = 9;
	// Inicializamos el array bidimensional
	$numeros = array();
	$numGenerados = array(); // Array para evitar números repetidos

	// Rellenamos el array bidimensional con números únicos
	for ($i = 0; $i < $filas; $i++) {
		for ($j = 0; $j < $columnas; $j++) {
			// Generar número único
			do {
				$numero = rand(100, 999);
			} while (in_array($numero, $numGenerados));

			// Guardamos el número generado en el array bidimensional y el array de control
			$numeros[$i][$j] = $numero;
			$numGenerados[] = $numero;
		}
	}

	$max = PHP_INT_MIN;
	$min = PHP_INT_MAX;
	$filaMin = -1;
	$columnaMax = -1;

	for ($i = 0; $i < $filas; $i++) {
		for ($j = 0; $j < $columnas; $j++) {
			if ($numeros[$i][$j] > $max) {
				$max = $numeros[$i][$j];
				$columnaMax = $j; // Guardamos la columna del máximo
			}

			if ($numeros[$i][$j] < $min) {
				$min = $numeros[$i][$j];
				$filaMin = $i; // Guardamos la fila del mínimo
			}
		}
	}

	echo "<table>";

	for ($i = 0; $i < $filas; $i++) {
		echo "<tr>";

		for ($j = 0; $j < $columnas; $j++) {
			if ($i == $filaMin) {
				echo "<td style='background-color: green;'>{$numeros[$i][$j]}</td>";
			} elseif ($j == $columnaMax) {
				echo "<td style='background-color: lightblue;'>{$numeros[$i][$j]}</td>";
			} else {
				echo "<td style='background-color: black; color: white;'>{$numeros[$i][$j]}</td>";
			}
		}

		echo "</tr>";
	}

	echo "</table>";
?>