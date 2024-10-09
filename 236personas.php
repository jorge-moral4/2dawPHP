<style>
	table, td {
		border: 1px solid;
	}
</style>

<?php
	$persona1 = [
		"nombre" => "Fabio",
		"altura" => 179,
		"email" => "fabio@email.com"
	];
	$persona2 = [
		"nombre" => "Sandra",
		"altura" => 167,
		"email" => "sandra@email.com"
	];
	$persona3 = [
		"nombre" => "Angel",
		"altura" => 175,
		"email" => "angel@email.com"
	];
	$persona4 = [
		"nombre" => "Carmen",
		"altura" => 171,
		"email" => "carmen@email.com"
	];
	$persona5 = [
		"nombre" => "Gonzalo",
		"altura" => 183,
		"email" => "gonzalo@email.com"
	];

	$personas = [$persona1, $persona2, $persona3, $persona4, $persona5];

	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Nombre</td>";
	echo "<td>Altura</td>";
	echo "<td>Email</td>";
	echo "</tr>";
	echo "</thead>";
	
	echo "<tbody>";

	foreach ($personas as $persona) {
		echo "<tr>";
		
		foreach ($persona as $datosPersona) {
			echo "<td>$datosPersona</td>";
		}

		echo "</tr>";
	}
	
	echo "</tbody>";
	echo "</table>";
?>