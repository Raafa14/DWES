<?php 
$meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

if (isset($_POST['temps'])) {
    $temps = $_POST['temps'];


    foreach ($temps as $mes => $t) {
            echo $mes . " :";
        for ($i = 1; $i <= $t; $i++) {
            echo '<img src="star.svg" width="15" height="15" alt="grado">';
        }
            echo "  En total ". $t . " Grados";
            echo "<br>";

    }

    

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio5.php" method="post">
        <?php foreach ($meses as $m): ?>
                Temperatura de <?=$m?><br>
                <input type="number" name="temps[<?=$m?>]"><br>
        <?php endforeach; ?>

        <input type="submit" value="Generar">
    </form>

</body>
</html>