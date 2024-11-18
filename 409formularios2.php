<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["nombre"]=$_POST["nombre"];
    $_SESSION["apellidos"]=$_POST["apellidos"];
    $_SESSION["email"]=$_POST["email"];
    $_SESSION["url"]=$_POST["url"];
    $_SESSION["sexo"]=$_POST["sexo"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario 2</title>
</head>
<body>
    <form action="409formularios3.php" method="post">
        <label for="convivientes">Número de convivientes:</label>
        <input type="number" name="convivientes" id="convivientes" required><br>

        <label for="aficiones">Aficiones:</label>
        <input type="text" name="aficiones" id="aficiones" placeholder="Separar por comas"><br>

        <label for="menu">Menú preferido:</label>
        <select name="menu" id="menu" required>
            <option value="vegetariano">Vegetariano</option>
            <option value="vegano">Vegano</option>
            <option value="carnívoro">Carnívoro</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>