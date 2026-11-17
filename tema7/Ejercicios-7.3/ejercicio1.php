

<?php 
session_start();
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
                $suma = 0;
            ?>
    <?php foreach($_SESSION['numero'] as $n): ?>
        <?php $contador++; ?>
            <td><?= $n ?></td>
        <?php $suma += $n; ?>
    <?php endforeach; ?>    
        </tr>
    </table>

            <?php 
                $division = 0;
            if ($numero < 0) {
                echo "Media: ";
                $division = ($suma / $contador);
                echo $division;
            }
            ?>

</body>
</html>