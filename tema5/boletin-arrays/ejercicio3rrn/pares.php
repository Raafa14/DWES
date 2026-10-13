<?php 
$numeros = [];
    for ($i = 0; $i < 20; $i++) {
        $numeros[] = rand(0, 50);
    }

    foreach ($numeros as $n) {

        if ($n % 2) {
            echo "<br>| ";
            echo $n;
            echo " | ";
            echo "Es impar";
        } else {
            echo "<br>| ";
            echo $n;
            echo " | ";
            echo "Es par";
        }
        



    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>