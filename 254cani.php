<?php
declare(string_types=1);
 function cani ($frase):string{
        $resultado = "";
        strtolower(string: $frase);
        $flagMay = true;
     for($i=0;$i<strlen(string:$frase); $i++){
         if($frase[$i]!=" "){
            if($flagMay){
               $frase[$i]=strtoupper(string:$frase[$i]);
                $flagMay = false;
                         } else{
                $frase[$i]=strtoupper(string:$frase[$i]);
                $flagMay = true;
                               }
                             }
        return $frase;
                                             }

    }


?>