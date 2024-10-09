<?php
$a =$_GET['a'] ;
$b = $_GET['b'];
$c = $_GET['c'];

if($a == $b && $a == $c ){
     echo 'Es un triangulo equilatero';
}
elseif(($a**2)==(($b**2)+($c**2))){
    echo 'Es un triangulo rectangulo';
}
elseif($a==$b || $a==$c || $b==$c){
    echo 'Es un triangulo isosceles';
}
else{
    echo 'Es un triangulo escaleno';
}

?>