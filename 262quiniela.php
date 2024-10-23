<?php

function quinigol() {
    $resultados = [];
    $opciones = ['0', '1', '2', 'M']; 

    for ($i = 0; $i < 6; $i++) {
        $resultado = [
            $opciones[array_rand($opciones)], 
            $opciones[array_rand($opciones)]  
        ];
        $resultados[] = $resultado;
    }

    return $resultados;
}

function quiniela() {
    $resultados = [];
    $opciones = ['0', '1', '2', 'M']; 

    for ($i = 0; $i < 14; $i++) {
        $resultado = [
            $opciones[array_rand($opciones)], 
            $opciones[array_rand($opciones)]  
        ];
        $resultados[] = $resultado;
    }
   
    $pleno = [
        $opciones[array_rand($opciones)], 
        $opciones[array_rand($opciones)] 
    ];
    
    $resultados[] = $pleno;

    return $resultados;
}

function tabla(array $quiniela) {
    $html = '<table border="1">';
    $html .= '<tr><th>Partido</th><th>Resultado</th></tr>';

    foreach ($quiniela as $index => $resultado) {
        $html .= '<tr>';
        $html .= '<td>Partido ' . ($index + 1) . '</td>';
        $html .= '<td>' . implode('-', $resultado) . '</td>'; 
    }

    $html .= '</table>';
    return $html;
}

$quinielaGenerada = quiniela();
echo tabla($quinielaGenerada);

?>
