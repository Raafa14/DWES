

<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
$mensaje = "";
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
            $mensaje = "Array terminado, has introducido un numero negativo";
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

    <?php 
        if ($_SESSION['usuario']){
            echo "Usuario conectado: " . $_SESSION['usuario'];
        }
    ?>

    <form action="" method="post">
        <input type="number" name="numero"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
    <a href="logout.php">Cerrar Sesión</a>

    <br><br>
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
            if ($numero < 0) {
                echo "Media: ";
                $division = (float)round(($suma / $contador), 2);
                echo $division . "<br>";
                echo $mensaje;
                $_SESSION['numero'] = [];
            }
            ?>

</body>
</html>