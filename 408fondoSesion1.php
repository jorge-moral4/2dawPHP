<?php
session_start();
if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}
$color = isset($_SESSION['color']) ? $_SESSION['color'] : 'white';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selecciona el color de fondo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">
    <h1>Elige un color de fondo</h1>
    <form method="post">
        <label for="color">Color:</label>
        <input type="color" id="color" name="color" value="<?php echo htmlspecialchars($color); ?>">
        <button type="submit">Establecer color</button>
    </form>
    <br>
    <a href="408fondoSesion2.php">Ir a la siguiente página</a>
</body>
</html>
