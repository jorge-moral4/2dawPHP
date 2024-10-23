<?php
function generador(): string{
    return random_int(0,1)==0 ? chr(random_int(65,90)):chr(random_int(97,122));
}
 function generarContraseña($tamaño):string{
    $contraseña="";
    for($i=0;$i<$tamaño;$i++){
        $contraseña.=random_int(0,1)?generador():random_int(0,9);

        return $contraseña;
    }
}

?>