<?php
$a = 42;
$primero = $a%10;
$segundo = $a%100;
$resultado = intdiv($primero . $segundo,10);

echo $resultado;
?>