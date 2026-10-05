<?php 
$numero = [];
$cuadrado = [];
$cubo = [];

for ($i = 0; $i < 20; $i++) {
    $random = rand(0, 100);
    $numero[$i] = $random;
    $cuadrado[$i] = $random * $random;
    $cubo[$i] = $random * $random * $random;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    
<table>
    <tr>
        <th>----</th>
        <th>Numero</th>
        <th>Cuadrado</th>
        <th>Cubo</th>
    </tr>
<?php for ($i = 0; $i < 20; $i++): ?>
    <tr>
        <td><?= $i+1 ?></td>
        <td><?= $numero[$i] ?></td>
        <td><?= $cuadrado[$i] ?></td>
        <td><?= $cubo[$i] ?></td>
    </tr>
<?php endfor; ?>
</table>


</body>
</html>