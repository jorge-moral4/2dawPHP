<?php
session_start();

// Definir credenciales (solo para propósitos de ejemplo, utiliza una base de datos en un entorno real)
$usuario_correcto = 'Luis';
$contrasena_correcta = 'password123';

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar las credenciales
if ($username === $usuario_correcto && $password === $contrasena_correcta) {
    // Iniciar sesión y redirigir a la página de bienvenida
    $_SESSION['username'] = $username;
    header('Location: bienvenida.php');
} else {
    echo 'Credenciales incorrectas. <a href="autenticacion.php">Volver a intentar</a>';
}
?>
