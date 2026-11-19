<?php 
session_start();
if(!isset($_SESSION['numero']) || !is_array($_SESSION['numero'])) {
    $_SESSION['numero'] = [];
}
if(isset($_POST['numero'])) {
    $numero = trim($_POST['numero']);

    if ($numero !== "" && is_numeric($numero)) {
        if ($numero >= 0) {
            $_SESSION['numero'][] = $numero;
        } else {
            echo "El numero es negativo.";
            session_destroy();
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
        <input type="submit" value="Enviar">
    </form><br>
    <table>
        <thead>
            <tr>
                <th>
                    Numero:
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $contador = 0;
                $totalAcu = 0;
            ?>
            <?php foreach($_SESSION['numero'] as $n): ?>
                <?php $contador++; ?>
                <?php $totalAcu += $n ?>
                <?php if ($totalAcu > 10000) {
                    echo "Los numeros introducidos superan los 10000, Cancelando el proceso.";
                    session_destroy();
                } 
                ?>
                <tr>
                    <td>
                        <?= $n ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php 
        if ($numero < 0) {
            echo "Total Numeros Acumulados: ". $totalAcu . "<br>"; 
            echo "Total Contador de numeros introducidos: ". $contador . "<br>"; 
            echo "Media de todos los numeros: " . round($totalAcu / $contador, 2);
        }
    ?>
</body>
</html>