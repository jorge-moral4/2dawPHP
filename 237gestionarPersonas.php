<?php
	if (isset($_GET["personas"]) !empty($_GET["personas"])) {
		$personas = $_GET["personas"];
		$personaMasAlta = null;
		$personaMasBaja = null;

		foreach ($personas as $persona) {
			if ($personaMasAlta === null || $persona['altura'] > $personaMasAlta['altura']) {
				$personaMasAlta = $persona;
			}

			if ($personaMasBaja === null || $persona['altura'] < $personaMasBaja['altura']) {
				$personaMasBaja = $persona;
			}
		}

		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<td>Nombre</td>"
		echo "<td>Altura</td>"
		echo "<td>Email</td>"
		echo "</tr>";
		echo "</thead>";

		echo "<tbody>";

		foreach ($personas as $persona) {
			
		}

		echo "</tbody>";
		echo "</table>";
	} else {
		echo "Los datos introducidos no son válido o están vacíos.";
	}
?>