<?php
	if (isset($_GET["cantidad"]) && !empty($_GET["cantidad"])) {
		$cantidad = $_GET["cantidad"];

		echo "<form action='237gestionarPersonas.php' method='get'>";
		
		for ($i = 0; $i <= $cantidad; $i++) {
			echo "<p>";
			echo "<label for='nombre$i'>Nombre: </label>";
			echo "<input type='text' name='nombre[$i][nombre]' id='nombre'>";
			echo "</p>";
			echo "<p>";
			echo "<label for='altura$i'>Altura: </label>";
			echo "<input type='number' name='altura[$i][altura]' id='altura$i'>";
			echo "</p>";
			echo "<p>";
			echo "<label for='email$i'>Email: </label>";
			echo "<input type='email' name='email[$i][email]' id='email$i'>";
			echo "</p>";

			echo "<hr>";
		}

		echo "<input type='submit' value='Enviar'>";
		echo "</form>";
	} else {
		echo "Los datos introducidos no son válido o están vacíos.";
	}
?>