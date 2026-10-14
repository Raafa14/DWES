<?php 

    $productos = [
        "Logitech G Pro" => 99.99, 
        "Silla Gaming" => 129.50,
        "Monitor MSI 24'" => 150,
        "Teclado NewSkill" => 69.99
    ];
    $contador = 0;
    for ($i = 0; $i < count($productos); $i++) {
        $contador++;
    }
    $mediaTotal = 0;
    foreach($productos as $i => $media) {
        $mediaTotal += $media / $contador;
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
            border-collapse:collapse;
        }
        td, th {
            border:1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Media</th>
            <td><?= $mediaTotal ?></td>
            <th>Producto mas caro</th>
        </tr>

        <?php foreach($productos as $i => $valor): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $valor . " €"?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>