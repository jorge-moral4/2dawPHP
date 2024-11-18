<?php
    session_start();
 
    if (isset($_SESSION['username'])) {
        header('Location:  bienvenida.php');
        exit();
    }
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticación</title>
</head>
<body>

<h2>Autenticación</h2>

<form action="login.php" method="post">
    <label for="username">Usuario</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Inicio">
</form>

</body>
</html>

