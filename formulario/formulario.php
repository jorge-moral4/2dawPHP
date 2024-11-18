<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $convivientes = $_POST["convivientes"];
    $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : [];
    $menuFavorito = isset($_POST["menu"]) ? $_POST["menu"] : [];
    

    
    echo "<h2>Datos Recibidos:</h2>";
    echo "<p><strong>Nombre y Apellidos:</strong> $nombre</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>URL Página Personal:</strong> $url</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Número de Convivientes:</strong> $convivientes</p>";
    echo "<p><strong>Aficiones:</strong> " . implode(", ", $aficiones) . "</p>";
    echo "<p><strong>Menú Favorito:</strong> " . implode(", ", $menuFavorito) . "</p>";
} else {
    
    echo "Acceso no autorizado";
}
?>
