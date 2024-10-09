<?php      
    $base=$_GET["base"];
    $exponente=$_GET["exp"];
    $base2=$base;
    $bucle=1;
    while($bucle<$exponente){
        $base=$base*$base2;
        $bucle++;
    }
echo $base;

?>