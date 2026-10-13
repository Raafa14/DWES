<?php 

$lista = ["TecladoGaming", "Raton Logitech", "Monitor MSI", "Camara Sony", "Microfono HyperX"];

if (isset($_POST['valor']) && !empty(trim($_POST['valor']))) {
    $valor = $_POST['valor'];
    $lista[] = $valor;
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


    <ul>
        <?php foreach($lista as $l): ?>
            <li>
                <?= $l ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="listacompra.php" method="post">
        Añade un producto más:<br>
        <input type="text" name="valor"><br>

        <input type="submit" value="Introducir">
    </form>

</body>
</html>