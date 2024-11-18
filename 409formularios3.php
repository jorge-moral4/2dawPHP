<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION["convivientes"]= $_POST['convivientes'];
    $_SESSION["aficiones"]= $_POST['aficiones'];
    $_SESSION["menu"]= $_POST['menu'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos Completos</title>
</head>
<body>
    <h2>Datos Recopilados:</h2>
    <ul>
        <li>Nombre: <?php echo $_SESSION['nombre']; ?></li>
        <li>Apellidos: <?php echo $_SESSION['apellidos']; ?></li>
        <li>Email: <?php echo $_SESSION['email']; ?></li>
        <li>URL: <?php echo $_SESSION['url']; ?></li>
        <li>Sexo: <?php echo $_SESSION['sexo']; ?></li>
        <li>Convivientes: <?php echo $_SESSION['convivientes']; ?></li>
        <li>Aficiones: <?php echo $_SESSION['aficiones']; ?></li>
        <li>Menú preferido: <?php echo $_SESSION["menu"]; ?></li>
    </ul>
</body>
</html>
