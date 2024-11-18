<?php

session_start();
$color = isset($_SESSION['color']) ? $_SESSION['color'] : 'white';
if (isset($_GET['action']) && $_GET['action'] == 'clear') {
    session_destroy();
    header("Location: 408fondoSesion1.php");

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Color de fondo actual</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">
    <a href="408fondoSesion1.php">Volver a la página anterior</a>
    <br>
    <a href="408fondoSesion2.php?action=clear">Vaciar la sesión y volver a la página anterior</a>
</body>
</html>

