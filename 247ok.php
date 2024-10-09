<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Aprobado</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_POST['usuario']); ?>!</h2>
    <p>Has iniciado sesión con éxito.</p>
</body>
</html>
