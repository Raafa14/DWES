<?php
// 1. Recoger número de serie del usuario
$serieUsuario = isset($_GET['serie']) ? (int)$_GET['serie'] : 0;

// 2. Generar combinación ganadora (6 números entre 1 y 49) y serie (1-999)
// Sin bucles ni arrays
$g1 = rand(1, 49);
$g2 = rand(1, 49);
$g3 = rand(1, 49);
$g4 = rand(1, 49);
$g5 = rand(1, 49);
$g6 = rand(1, 49);
$serieGanadora = rand(1, 999);

// 3. Comprobar aciertos solo sobre la combinación ganadora
$aciertos = 0;

if (isset($_GET['n' . $g1])) {
    $aciertos++;
}
if (isset($_GET['n' . $g2])) {
    $aciertos++;
}
if (isset($_GET['n' . $g3])) {
    $aciertos++;
}
if (isset($_GET['n' . $g4])) {
    $aciertos++;
}
if (isset($_GET['n' . $g5])) {
    $aciertos++;
}
if (isset($_GET['n' . $g6])) {
    $aciertos++;
}

// 4. Calcular premios según los aciertos
$premioBase = "";

if ($aciertos < 4) {
    $premioBase = "Nada";
} elseif ($aciertos == 4) {
    $premioBase = "Dinero vuelto";
} elseif ($aciertos == 5) {
    $premioBase = "30 euros";
} elseif ($aciertos == 6) {
    $premioBase = "100 euros";
}

// Comprobación de serie (+500 euros)
$premioSerie = "";
if ($serieUsuario === $serieGanadora) {
    $premioSerie = " + 500 euros por acertar el número de serie";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Sorteo</title>
</head>
<body>

    <h2>Combinación Ganadora</h2>

    <!-- Tabla con una sola fila y un número en cada columna -->
    <table border="1" cellpadding="8">
        <tr>
            <th>Nº 1</th>
            <th>Nº 2</th>
            <th>Nº 3</th>
            <th>Nº 4</th>
            <th>Nº 5</th>
            <th>Nº 6</th>
            <th>Serie</th>
        </tr>
        <tr>
            <td><?= $g1 ?></td>
            <td><?= $g2 ?></td>
            <td><?= $g3 ?></td>
            <td><?= $g4 ?></td>
            <td><?= $g5 ?></td>
            <td><?= $g6 ?></td>
            <td><?= $serieGanadora ?></td>
        </tr>
    </table>

    <h3>Resultados</h3>
    <p><strong>Aciertos:</strong> <?= $aciertos ?></p>
    <p><strong>Premio obtenido:</strong> <?= $premioBase . $premioSerie ?></p>

    <br>
    <a href="index.html">Volver a jugar</a>

</body>
</html>