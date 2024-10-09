<?php
	if (isset($_GET['pregunta']) && !empty($_GET['pregunta'])) {
		$pregunta = $_GET['pregunta'];
		$respuestas = [
			"si",
			"no",
			"quizás",
			"claro que si",
			"por supuesto que no",
			"no lo tengo claro",
			"seguro",
			"yo diría que si",
			"ni de coña"
		];

		$respuestaAleat = $respuestas[rand(0, count($respuestas) - 1)];

		if (!empty($pregunta)) {
			echo "<p>Tu pregunta: $pregunta</p>";
			echo "<p>Respuesta de la bola 8: $respuestaAleat</p>";
		}
	} else {
		echo "Los datos introducidos no son válidos o están vacíos.";
	}
?>