<?php 
    if (!isset($_POST['texto'])) {
        $texto = "";
    } else {
        $texto = $_POST['texto'];
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
    <form action="" method="post">
    Introduce lo que quieras, que acabe o no en punto <br>
    <input type="text" name="texto"><br>    

    <input type="submit" value="Enviar"><br>
    </form>

    <?php 
    
    //Variables inicializadas
    $palabras = explode(" ", $texto);
    $longitudes = array_map('mb_strlen', $palabras);
    $longitudMaxima = max($longitudes);
    $palabraMasLarga = "";
    $posicionInicial = 0;
    $contadorPalabras = 0;
    
    foreach ($palabras as $palabra) {
        $longitud = mb_strlen($palabra);

        if ($longitud >= 8 && $longitud <= 16) {
        
        $palabraLower = mb_strtolower($palabra);
        
        $cantidadA = mb_substr_count($palabraLower, 'a') + mb_substr_count($palabraLower, 'á');
        
        if ($cantidadA > 3) {
            $contadorPalabras++;
            echo "Palabra encontrada: '$palabra' (Longitud: $longitud, Apariciones de 'a': $cantidadA)<br>";
        }
    }
    }

    foreach ($palabras as $palabra) {
        if (mb_strlen($palabra) > mb_strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
            $posicionInicial = mb_strpos($texto,$palabra);
        }
    }

    if ($longitudMaxima >= 8 && $longitudMaxima <= 16) {

    }

    echo "<h1>Texto:</h1>";
    echo $texto . "<br>";
    echo "<h2>Palabra con mas letras:</h2>";
    echo "La palabra más larga tiene $longitudMaxima letras.<br>";
    echo "Posición inicial (índice): $posicionInicial<br>";
    echo "Y es: " . $palabraMasLarga;

    ?>

</body>
</html>