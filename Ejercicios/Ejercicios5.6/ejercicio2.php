<?php 

    $nums = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        for ($i = 1; $i < 11; $i++) {

            $nums[] = (int) $_POST['n' . $i];

        }
        
        $maximo = max($nums);
        $minimo = min($nums);

        foreach ($nums as $n) {
        echo $n;
        if ($n == $maximo) {
            echo " maximo";
        }
        if ($n == $minimo) {
            echo " minimo";
        }
        echo "<br>";
    }
}

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