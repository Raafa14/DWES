<?php 

$nombres = ["Rafa", "Paula", "Lola", "Sara", "Isabel"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse: collapse;}
        th, td {
            border: 1px solid black;
        }

    </style>
</head>
<body>

    <table>
        <tr>
            <th>
                Indice
            </th>
            <th>
                Nombres
            </th>
        </tr>

        <?php foreach($nombres as $i => $n): ?>
        <tr>
                <td><?= $i ?></td>
                <td><?= $n ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>