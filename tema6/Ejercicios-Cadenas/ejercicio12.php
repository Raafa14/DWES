<?php 
    if (!isset($_POST['letras'])) {
        $letras = "";
    } else {
        $letras = $_POST['letras'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        .mal {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Introduce palabras de cuantas letras quieras: <br>
        <input type="text" name="letras"><br>
        <input type="submit" value="Enviar"><br>
    </form>

    <?php 
        $totalCaracteres = mb_strlen($letras);

        $palabrasMas10 = 0;
        $conteoVocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
        $espacios = 0;

        $palabras = explode(" ", $letras);
        foreach ($palabras as $palabra) {
            if (mb_strlen($palabra) > 10) {
                $palabrasMas10++;
            }
        }

        for ($i = 0; $i < $totalCaracteres; $i++) {
            $caracter = mb_substr($letras, $i, 1);
            $caracterLower = mb_strtolower($caracter);

            if (array_key_exists($caracterLower, $conteoVocales)) {
                $conteoVocales[$caracterLower]++;
            } elseif ($caracter === ' ') {
                $espacios++;
            }
        }

        $porcentajeEspacios = ($totalCaracteres > 0) ? ($espacios / $totalCaracteres) * 100 : 0;
        
        echo "<hr><h3>Resultados:</h3>";
        echo "<p><strong>a. Cantidad de palabras con más de 10 letras:</strong> $palabrasMas10</p>";
        
        echo "<p><strong>b. Frecuencia de cada vocal:</strong></p>";
        echo "<ul>";
        foreach ($conteoVocales as $vocal => $cantidad) {
            echo "<li>Vocal '<strong>$vocal</strong>': $cantidad</li>";
        }

    ?>
</body>
</html>