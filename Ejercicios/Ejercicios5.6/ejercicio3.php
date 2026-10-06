<?php 

    $nums = [];
    $rotado = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        for ($i = 1; $i < 11; $i++) {

            $nums[] = (int) $_POST['n' . $i];

        }

        $ultimo = $nums[9];

        for ($i = 9; $i > 0; $i--) {

            $nums[$i] = $nums[$i - 1];

        }

        $nums[0] = $ultimo;

        foreach ($nums as $n) {

        echo $n;
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