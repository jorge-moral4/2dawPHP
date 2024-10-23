<?php
declare(strict_types=1);
const MIN_MIN = 65;
const MAX_MIN = 90;
const MIN_MAY = 97;
const MAX_MAY = 122;
function codificar($frase,$desplazamiento): string{

    $resultado="";
    if($desplazamiento>=0){
        for($i=0;$i<strlen(string:$frase);$i++){
    if(ord($frase[$i])>=MIN_MIN && ord(character: $frase[$i])<=MAX_MIN){
                if(ord($frase[$i])+$desplazamiento>MAX_MIN){
    $resultado .=chr (MAX_Min - ord($frase[$i])+$desplazamiento);
                 } else{
    $resultado.=chr(codepint: ord(character:$frase[$i])+$desplazamiento);
                }
 }elseif(ord(character:$frase[$i])>=MIN_MAY && ord(character:$frase[$i])<=MAX_MAY){
if(ord($Frase[$i])+$desplazamiento>MAX_MIN){
    
}
}else{
                $resultado=$frase[$i];
            }
        }

    }
    else{
        $resultado = "El desplazamiento es incorrecto";
    }
}


?>