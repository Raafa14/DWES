<?php 
$mensaje = '';
$meses = [
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre',
];

if (isset($_POST['enviar'])) {
    $fecha = $_POST['fecha'];
    $fechaSeparada = explode("-", $fecha);
    $ano = (int)$fechaSeparada[0];
    $mes = (int)$fechaSeparada[1]; 
    $dia = (int)$fechaSeparada[2];

    $textoMes = $meses[$mes];

    $mensaje = $dia . " de " . $textoMes . " de " . $ano;
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
        <input type="date" name="fecha"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <textarea name="" rows="4" cols="30">
        <?php echo $mensaje ?>
    </textarea>

</body>
</html>