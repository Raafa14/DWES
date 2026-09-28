<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $pi = 3.1416;

    echo "El volumen del cilindro es de: ", $pi * ($a * $a) * $b;

    ?>
</body>
</html>
