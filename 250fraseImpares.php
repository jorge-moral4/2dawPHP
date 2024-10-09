<?php
$frase = "hola soy jorge";
$tam = strlen($frase);

for($i=0;$i<$tam;$i++){
    if($i%2!=0){
        $frase2.=$frase[$i];
    }
}
echo $frase2;
?>