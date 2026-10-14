<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        Selecciona tus colores favoritos:<br>
        <label><input type="checkbox" name="colores[]" value="Rojo"> Rojo</label><br>
        <label><input type="checkbox" name="colores[]" value="Azul"> Azul</label><br>
        <label><input type="checkbox" name="colores[]" value="Verde"> Verde</label><br>
        <label><input type="checkbox" name="colores[]" value="Amarillo"> Amarillo</label><br>
        <label><input type="checkbox" name="colores[]" value="Negro"> Negro</label><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["colores"])) {
            echo "<p style='color: red;'>Aviso: No has seleccionado ningun color.</p>";
        } else {
            $colores = $_POST["colores"];
            echo "<h3>Colores elegidos:</h3>";
            echo "<ul>";
            foreach ($colores as $color) {
                echo "<li>" . $color . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>

</body>
</html>