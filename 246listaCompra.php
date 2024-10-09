<?php
session_start();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['producto'], $_POST['precio'])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];

    if (!empty($producto) && is_numeric($precio)) {
        $_SESSION['productos'][] = ['producto' => $producto, 'precio' => $precio];
    }
}


include 'encabezado.php';
?>

<main>
    <h2>Lista de Compra</h2>
    <ul>
        <?php foreach ($_SESSION['productos'] as $item): ?>
            <li><?php echo htmlspecialchars($item['producto']); ?> - $<?php echo htmlspecialchars($item['precio']); ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php

include 'pie.php';
?>
