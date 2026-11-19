<!-- 


Ejercicio 2
Realiza un programa que vaya pidiendo numeros hasta que se 
introduzca un numero negativo y nos diga
cuantos numeros se han introducido, la media de los impares 
y el mayor de los pares. El numero negativo solo
se utiliza para indicar el final de la introduccion de datos
 pero no se incluye en el computo. Utiliza sesiones. -->


<?php 
session_start();
$numero = 0;
if  (!isset($_SESSION['numero']) || !is_array($_SESSION['numero'])) {
    $_SESSION['numero'] = [];
}
if (isset($_POST['numero'])) {
    $numero = trim($_POST['numero']);

    if ($numero !== "" && is_numeric($numero)) {
        if ($numero >= 0) {
            $_SESSION['numero'][] = $numero;
        } else {
            session_destroy();
            echo "Array terminado, has introducido un numero negativo";
        }
    }
}
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
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="numero"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <table>
        <tr>
            <?php
                $contador = 0;
                $contadorI = 0;
                $impares = 0;
                $suma = 0;
                $pares = 0;
                $mayor = 0;
            ?>
    <?php foreach($_SESSION['numero'] as $n): ?>
        <?php $contador++; ?>
            <td><?= $n ?></td>
        <?php 
            if ($n % 2 != 0) {
                $contadorI++;
                $impares += $n;
            } 
            if ($n % 2 == 0) {
                if ($n > $mayor) {
                    $mayor = $n;
                }
            }
        ?>
    <?php endforeach; ?>    
        </tr>
    </table>

    <?php 
    
    if ($numero < 0) {
        echo "La media de los impares son: " . ($impares / $contadorI) . "<br>";
        echo "El mayor de los pares es: " . $mayor;
    }   
    ?>

</body>
</html>