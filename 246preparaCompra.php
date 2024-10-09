<?php
include 'encabezado.php';
?>

<main>
    <h2>Preparar Compra</h2>
    <form action="246listaCompra.php" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" required>
        
        <label for="precio">Precio:</label>
        <input type="number" name="precio" required>
        
        <input type="submit" value="Agregar a la compra">
    </form>
</main>

<?php
include 'pie.php';
?>
