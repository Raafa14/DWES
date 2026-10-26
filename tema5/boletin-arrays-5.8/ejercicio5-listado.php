<?php

    $aspirantes = unserialize(base64_decode($_POST['aspirantes']));

    if (empty($aspirantes)) {
        echo "<h1>Primero se deben introducir los aspirantes.</h1><br>";
        echo "<a href='ejercicio5.php'>Volver al formulario</a>";
        exit;
    }
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado</title>
</head>
<body>

    <h2>Listado de Aspirantes</h2>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Años de experiencia</th>
            <th>Correo</th>
        </tr>

        <?php
        // PASO 3: Recorrer el array aspirante por aspirante
        foreach ($aspirantes as $nombre => $datos) {

            // PASO 4: Comprobar si tiene más de 30 años
            if ($datos['edad'] > 30) {
                $color = "red";
            } else {
                $color = "black";
            }

            // PASO 5: Imprimir la fila con su color
            echo "<tr style='color: $color;'>";
            echo "<td>" . $nombre . "</td>";
            echo "<td>" . $datos['edad'] . "</td>";
            echo "<td>" . $datos['anos'] . "</td>";
            echo "<td>" . $datos['correo'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php">Volver</a>

</body>
</html>