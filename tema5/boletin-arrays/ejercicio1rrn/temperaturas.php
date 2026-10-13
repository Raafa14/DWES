<?php 

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    $temps = [30, 32, 29, 21, 35, 40, 45];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<table>
    <tr>
        
        <th>Dia</th><th>Temperaturas</th>
        
    </tr>

        <?php foreach($dias as $i => $dia): ?>
            <tr>
                <td><?= $dia ?></td>
                <td><?= $temps[$i] ?></td>
            </tr>
        <?php endforeach; ?>

    <tr>
        <td>Media </td>
        <td> 

            <?php 
                $media = 0;
            foreach ($temps as $t) {
                $media += $t;
            } 

            $media = round($media / 7, 1);

            echo $media;

            ?> 

        </td>
    </tr>
</table>
    
</body>
</html>