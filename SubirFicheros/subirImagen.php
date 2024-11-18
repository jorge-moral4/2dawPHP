<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $archivo = $_FILES["archivo"];
    $anchura = $_POST["anchura"];
    $altura = $_POST["altura"];

    
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($archivo["type"], $allowedTypes)) {
        echo "<p style='color: red;'>Error: Solo se permiten archivos de imagen (JPEG, PNG, GIF).</p>";
    } else {
        
        echo "<h2>Información del Archivo:</h2>";
        echo "<p><strong>Nombre del Archivo:</strong> " . $archivo["name"] . "</p>";
        echo "<p><strong>Tipo de Archivo:</strong> " . $archivo["type"] . "</p>";
        echo "<p><strong>Tamaño del Archivo:</strong> " . $archivo["size"] . " bytes</p>";

       
        echo "<h2>Dimensiones:</h2>";
        echo "<p><strong>Anchura:</strong> $anchura cm</p>";
        echo "<p><strong>Altura:</strong> $altura cm</p>";

      
        echo "<h2>Imagen:</h2>";
        echo "<img src='carpeta_destino/" . $archivo["name"] . "' alt='Imagen' width='$anchura' height='$altura'>";
        
       
        move_uploaded_file($archivo["tmp_name"], $archivo["name"]);
    }

} else {
    
    echo "Acceso no autorizado";
}
?>
