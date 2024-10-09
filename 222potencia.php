<?php      
    $base=$_GET["base"];
    $exponente=$_GET["exp"];
    $base2=$base;
    for($i=1;$i<=$exponente;$i++){
        $base=$base*$base2;
    }
echo $base;

?>