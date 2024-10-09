<?php
session_start();

$usuarios = [
    'usuario1' => 'contrasena1',
    'usuario2' => 'contrasena2',
    'usuario3' => 'contrasena3'
];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (array_key_exists($usuario, $usuarios)) {
    if ($usuarios[$usuario] === $contrasena) {
        include '247ok.php';
    } else {
        $_SESSION['error'] = "Contraseña incorrecta para el usuario '$usuario'.";
        header('Location: 247login.php');
    }
} else {
    $_SESSION['error'] = "Usuario '$usuario' no encontrado.";
    header('Location: 247login.php');
}
?>
