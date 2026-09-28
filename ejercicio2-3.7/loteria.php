<?php
// 1. Recoger datos del formulario
$loteria = [
    $_GET['n1'],
    $_GET['n2'],
    $_GET['n3'],
    $_GET['n4'],
    $_GET['n5'],
    $_GET['n6']
];
$serieLoteria = $_GET['serie'];

// 2. Generar 6 números aleatorios sin repetir y el número de serie
$generados = [];
while (count($generados) < 6) {
    $num = rand(1, 49);
    if (!in_array($num, $generados)) {
        $generados[] = $num;
    }
}
$serieGenerada = rand(1, 999);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Sorteo</title>
</head>
<body>

    <h2>Resultados</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Tipo</th>
            <th>Nº 1</th>
            <th>Nº 2</th>
            <th>Nº 3</th>
            <th>Nº 4</th>
            <th>Nº 5</th>
            <th>Nº 6</th>
            <th>Serie</th>
        </tr>
        <!-- Fila 1: Introducida por el usuario -->
        <tr>
            <td>Usuario</td>
            <?php foreach ($loteria as $n): ?>
                <td><?= $n ?></td>
            <?php endforeach; ?>
            <td><?= $serieLoteria ?></td>
        </tr>
        <!-- Fila 2: Generada por el sistema -->
        <tr>
            <td>Generada</td>
            <?php foreach ($generados as $n): ?>
                <td><?= $n ?></td>
            <?php endforeach; ?>
            <td><?= $serieGenerada ?></td>
        </tr>
    </table>

    <br>
    <a href="formulario.html">Volver a jugar</a>

</body>
</html>