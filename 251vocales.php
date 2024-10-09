<?php
$frase="hola soy jorge";
$vocales=["a"=>0;"e"=>0;"i"=>0;"o"=>0;"u"=>0];
$frase2=strtolower($frase);
for($i=0;$i<strlen($frase);$i++){
    if(array_key_exists($frase[$i],$vocales)){
        $vocales($frase2[$i])++;
    }
}
print_r($vocales);
echo "<br>";
echo "la suma total es: ". array_sum($vocales);


?>