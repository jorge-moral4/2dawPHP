<?php
    $suma = 0;
    $inicio = $_GET["inicio"];
    $fin = $_GET["fin"];
        for($i=$inicio;$i<=$fin;$i++){
        $suma = $suma + $i;
        }
    echo $suma;
?>