<?php 
$mensaje = '';

if (isset($_POST['enviar'])) {
    $diaObjetivo = (int)$_POST['diasSemanas'];
    $diaActual = (int)date('N');

    $diasFaltan = $diaObjetivo - $diaActual;

    if ($diasFaltan <= 0) {
        $diasFaltan = $diasFaltan + 7;
    }

    $fecha = date('d/m/Y', strtotime("+$diasFaltan days"));

    $nombres = [
        1 => 'Lunes', 
        2 => 'Martes', 
        3 => 'Miércoles', 
        4 => 'Jueves', 
        5 => 'Viernes', 
        6 => 'Sábado', 
        7 => 'Domingo'
    ];

    $mensaje = "El próximo {$nombres[$diaObjetivo]} será el $fecha";

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

    <form action="" method="post">

        <select name="diasSemanas">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sabado</option>
            <option value="7">Domingo</option>
        </select><br>

    <input type="submit" name="enviar" value="Enviar">
    </form>

    <textarea rows="4" cols="30">
        <?php echo $mensaje; ?>
    </textarea>

</body>
</html>