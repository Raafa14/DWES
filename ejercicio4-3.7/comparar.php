
<?php

$p1 = $_POST['precio1'];
$p2 = $_POST['precio2'];
$p3 = $_POST['precio3'];

$media = ($p1 + $p2 + $p3) / 3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1" cellpadding="4">
        <tr>
            <th>Tiendas</th>
            <th>Precio</th>
            <th>Diferencia</th>
            <th>Rentable</th>
        </tr>
        <tr>
            <td>Tienda 1</td>
            <td><?= $p1 ?></td>
            <?php 
            $resultado1 = abs($p1 - $media)
            ?>
            <td><?= round($resultado1) ?></td>
            <td>
            <?php 
            if ($p1 < $resultado1) {
                echo "Si";
            } else {
                echo "No";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>Tienda 2</td>
            <td><?= $p2 ?></td>
            <?php 
            $resultado2 = abs($p2 - $media)
            ?>
            <td><?= round($resultado2) ?></td>
            <td>
                <?php 
            if ($p2 < $resultado2) {
                echo "Si";
            } else {
                echo "No";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>Tienda 3</td>
            <td><?= $p3 ?></td>
            <?php 
            $resultado3 = abs($p3 - $media)
            ?>
            <td><?= round($resultado3) ?></td>
            <td>
                <?php 
            if ($p3 < $resultado3) {
                echo "Si";
            } else {
                echo "No";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>Media</td>
            <td><?= round($media) ?></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>
</html>