<?php
$arrMonedas = [
    500 => 0,
    200 => 0,
    100 => 0,
    50  => 0,
    20  => 0,
    10  => 0,
    5   => 0,
    2   => 0,
    1   => 0,
];

$dinero = 1234; 

foreach ($arrMonedas as $clave => &$valor) {
    while ($dinero >= $clave) {
        $arrMonedas[$clave]++;
        $dinero -= $clave;
    }
}


echo "<ul>";
foreach ($arrMonedas as $clave => $valor) {
    if ($cantidad > 0) {
        echo "<li>$cantidad x $clave</li>";
    }
}
echo "</ul>";

?>