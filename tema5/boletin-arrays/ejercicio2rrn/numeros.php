<?php 
$numeros = [];
    for ($i = 0; $i < 12; $i++) {
        $numeros[] = rand(0, 20);
    }
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
        
        <th>Numero</th>
        <th>Cuadrado</th>
        <th>Cubo</th>
        
    </tr>

    <?php foreach($numeros as $n): ?>
    <tr>
        
        <th><?= $n ?></th>
        <th><?= $n * $n ?></th>
        <th><?= $n * $n * $n ?></th>
        
    </tr>
    <?php endforeach; ?>


</table>

</body>
</html>