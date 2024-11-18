<?php

$cookie_duration = 24 * 60 * 60; 


if (isset($_POST['color'])) {
    setcookie('color_fondo', $_POST['color'], time() + $cookie_duration);
    $color_fondo = $_POST['color']; 
} else {
    
    if (isset($_COOKIE['color_fondo'])) {
        $color_fondo = $_COOKIE['color_fondo']; 
    } else {
      
        $color_fondo = 'white';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Color de Fondo</title>
</head>
<body style="background-color: <?php echo $color_fondo; ?>;">

    <h1>Seleccione un color para el fondo</h1>

    <form action="407fondo.php" method="POST">
        <label for="color">Elija un color:</label>
        <select name="color" id="color">
            <option value="white" <?php if ($color_fondo == 'white') echo 'selected'; ?>>Blanco</option>
            <option value="lightblue" <?php if ($color_fondo == 'lightblue') echo 'selected'; ?>>Azul Claro</option>
            <option value="lightgreen" <?php if ($color_fondo == 'lightgreen') echo 'selected'; ?>>Verde Claro</option>
            <option value="yellow" <?php if ($color_fondo == 'yellow') echo 'selected'; ?>>Amarillo</option>
            <option value="pink" <?php if ($color_fondo == 'pink') echo 'selected'; ?>>Rosa</option>
            <option value="lightgray" <?php if ($color_fondo == 'lightgray') echo 'selected'; ?>>Gris Claro</option>
        </select>
        <button type="submit">Aplicar Color</button>
    </form>

</body>
</html>
