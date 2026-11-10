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
        Introduce letra romana con su numero:<br>
        Ejemplo: M:1000, D:500, C:100, L:50, X:10.<br>
        <input type="text" name="letras"><br>

        <input type="submit" value="Enviar"><br>
    </form>

    <?php 
    if ($letras != "M:1000" && $letras != "D:500" && $letras != "C:100"
        && $letras != "L:50" && $letras != "X:10") {
            echo '<p class="mal">Introduce los numeros romanos<p>';
        } else {
            $separar = (int)substr($letras, 2, 6);
            echo $separar;
        }
        
    ?>
</body>
</html>