<?php
$frase = "hola me llamo jorge";
$cantidadletras=0;
for($i=0;$i<strlen($frase);$i++){
    if($frase[$i]===" "){
        $frase2=trim($frase, " ");
    }
    else{
        $cantidadletras++;
    }
}
echo "cantidad de letras $cantidadletras";
 
?>