<?php
declare(strict_types=1);
function esPar(int $num): bool{
    return $num%2==0;
}

echo esPar(num: 23)? "Es par":"Es Impar";

function arrayAleatorio (int $tam,int $min , int $max): array {
    $arrNumAle = array();
    for($i=0; $i<$tam;$i++){
        $arrNumAle[$i]= rand(min :$min,max :$max);
    }
    return $arrNumAle;
}
function arrayPares(array & $array): int {
    $contPares =0 ;
    foreach($array as $value)
    if(esPar(num: $value))
        $contPares++;
    return $$contPares;

}
$arrResultado = arrayAleatorio(tam:15,min:10,max:100);
mostrarArray(arr: $arrResultado);
echo arrayPares (
    array: & &arrayAleatorio);
?>