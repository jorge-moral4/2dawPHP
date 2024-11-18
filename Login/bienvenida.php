<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header('Location:  autenticacion.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
<h2>Bienvenido, <?= $username; ?>!</h2>
<a href="logout.php">Cerrar sesión</a>

</body>
</html>
