<?php 
session_start();

if (isset($_POST['eliminar'])) {
    $ingles = $_POST['eliminar'];

    unset($_SESSION['diccionario'][$ingles]);

    header("Location: admin.php");
    exit;
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
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Ingles</th>
                <th>Español</th>
                <th>Botones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['diccionario'] as $ingles => $esp):  ?>
            <tr>
                <td><?= $ingles ?></td>
                <td><?= $esp ?></td>
                <td>
                    <form method="post">
                        <button type="submit" name="eliminar" value="<?= $ingles ?>">Eliminar</button>
                        <button type="submit" name="modificar" value="<?= $ingles ?>">Modificar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br>
    <a href="index.php"><button type="button"> Volver al inicio</button></a>

</body>
</html>