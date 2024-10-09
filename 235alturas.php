<style>
	table, td {
		border: 1px solid;
	}
</style>

<?php
	$lista = [
		"Nombre 1" => 170,
		"Nombre 2" => 175,
		"Nombre 3" => 180,
		"Nombre 4" => 185,
		"Nombre 5" => 190,
	];
	$mediaAltura = 0;

	echo "<table>";

	foreach ($lista as $nombre => $altura) {
		echo "<tr>";
		echo "<td>$nombre</td>";
		echo "<td style='text-align: center;'>$altura</td>";
		echo "</tr>";

		$mediaAltura += $altura;
	}

	$res = intdiv($mediaAltura, count($lista));

	echo "<tr>";
	echo "<td colspan='2'>Media de altura: " . $res . " cm</td>";
	echo "</tr>";
	echo "</table>";
?>