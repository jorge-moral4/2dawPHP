<?php
$monedade2 = 3 ;
$monedade1 = 2 ;
$monedade50cent = 3;
$monedade20cent = 4;
$monedade10cent = 5; 

$totalcent =($monedade2*200)+($monedade1*100)+($monedade50cent*50)+($monedade20cent*20)+($monedade10cent*10);
$totaleuros = intdiv($totalcent,100);
$totalcentimos= $totalcent%100;
echo $totaleuros . 'euros' . $totalcentimos . 'centimos';

?>