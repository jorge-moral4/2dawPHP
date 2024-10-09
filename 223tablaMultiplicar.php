<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
     
</head>
<body>
    <?php
   
        $numero = $_GET['numero'];
        
        echo "<h1 style='text-align: center;'>Tabla de multiplicar del $numero</h1>";

        echo "<table>";
        echo "<tbody>";
        
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>{$numero} x {$i}</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
   
    ?>
</body>
</html>
