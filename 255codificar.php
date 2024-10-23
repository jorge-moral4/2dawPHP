<?php
declare (strict_types=1);
$palabra = "bcdefghijklmnñopqrstuvwxy";
$resul="";
$desplazamiento=1;

for($i=0;$i<strlen($palabra);$i++){
    $caracter = ord($palabra[$i]);
    if($caracter>=97&& $caracter<=122){ 
        $palabraDes = $caracter+$desplazamiento;
        $resul .=chr($palabraDes);
    }
    else{
        $resul .=chr($palabraDes);
    }
}
echo $resul;
?>