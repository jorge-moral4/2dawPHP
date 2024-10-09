<?php
function mayor(): int{
 $mayor=0;
 if(count(value: func_get_arg()) ==0){
    return false;
 }else{
    $mayor = func_get_arg(position: 0);
    foreach(func_get_arg()as $arg){
        if($mayor<$arg)
        $mayor =$arg ;

    }
    return $mayor;
 }

}

?>