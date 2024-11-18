
<!DOCTYPE html>
<html>
<head>
    <title>Formulario 1</title>
</head>
<body>
    <form action="409formularios2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="url">URL:</label>
        <input type="url" name="url" id="url"><br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select><br>

        <input type="submit" value="Siguiente">
    </form>
</body>
</html>
