<?php

if (isset($_COOKIE['visitas'])) {
    
    $contador = $_COOKIE['visitas']+1;
} else {
   
    $contador = 1;
}
setcookie('visitas', $contador,time() + 3600 );


if (isset($_GET['reiniciar'])) {
    
    setcookie('visitas',' ', time() - 3600);  

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a nuestro sitio web</h1>
    
    <?php
 
    if (isset($_COOKIE['visitas'])) {
        echo "<p>¡Bienvenido de nuevo! Has visitado este sitio " . $_COOKIE['visitas'] . " veces.</p>";
    } else {
        echo "<p>¡Es tu primera visita!</p>";
    }
    ?>


    <p><a href="?reiniciar=true">Reiniciar contador de visitas</a></p>
</body>
</html>
