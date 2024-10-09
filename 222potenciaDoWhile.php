<?php      
    $base=$_GET["base"];
    $exponente=$_GET["exp"];
    $base2=$base;
    $bucle=1;
    do{
        $base=$base*$base2;
        $bucle++;
    }
    while($bucle<$exponente);
echo $base;

?>