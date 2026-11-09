<?php 

    function dameTarjeta($perfil) {
        if ($perfil === 'admin') {
            $perfil = [
                [111, 222, 333, 444, 555],
                [123, 234, 345, 456, 567],
                [11, 22, 33, 44, 55],
                [55, 66, 77, 88, 99],
                [350, 450, 550, 650, 750],
            ];
        };
        if ($perfil === 'estandar') {
            $perfil = [
                [155, 255, 355, 455, 555],
                [144, 244, 344, 444, 544],
                [133, 233, 333, 433, 533],
                [189, 289, 389, 489, 589],
                [175, 275, 375, 475, 575],
            ];
        };
        return $perfil;
    }

    function compruebaClave($matriz, $coordenadas, $valor) {
    // Mapeo para traducir la letra de columna (A-E) a su índice numérico (0-4)
        $columnas = [
            'A' => 0,
            'B' => 1,
            'C' => 2,
            'D' => 3,
            'E' => 4,
        ];

    // Ajustamos la fila (1-5 a índice 0-4)
        if (!isset($coordenadas['columna']) || !isset($columnas[$coordenadas['columna']])) {
        return false;
    }

    $indiceFila = $coordenadas['fila'] - 1;
    $indiceColumna = $columnas[$coordenadas['columna']];

    // Verificamos si existe la posición y si el valor coincide
        if (isset($matriz[$indiceFila][$indiceColumna])) {
            return (int)$matriz[$indiceFila][$indiceColumna] === (int)$valor;
        }

    return false;
    }

    function imprimeTarjeta($matriz, $titulo = '') {
    $html = '<table>';
    if (!empty($titulo)) {
        $html .= '<tr><th colspan="6">' . $titulo . '</th></tr>';
    }
    
    // Fila con letras
    $html .= '<tr><th></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th></tr>';

    // Filas con números y casillas
    foreach ($matriz as $i => $fila) {
        $html .= '<tr>';
        $html .= '<th>' . ($i + 1) . '</th>';
        foreach ($fila as $num) {
            $html .= '<td>' . $num . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

?>
