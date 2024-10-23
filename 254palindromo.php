<?php
declare(strict_types=1);
$frase="Ligar es ser agil";
function palimdromo(string $frase):bool{
    $frase = strtolower(string: $frase);
    $frase2= str_replace(" ","",$frase);
    $fraseInv =strrev($frase);
    return $fraseInv== $frase2;
   
    if($fraseInv==$frase2){
        return"Es palindromo";
    }
    else{
        return "No es palindromo";
    }
}

?>