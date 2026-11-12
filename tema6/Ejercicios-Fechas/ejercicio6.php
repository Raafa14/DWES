<?php 
$mensaje = '';

if (isset($_POST['enviar'])) {
    $dia = (int)$_POST['dia'];
    $mes = (int)$_POST['mes'];
    $year = (int)$_POST['year'];
    $actual = (int)date("d-m-Y", strtotime("now + $dia days + $mes month + $year year"));

    $nombres = [
        1 => 'Lunes', 
        2 => 'Martes', 
        3 => 'Miércoles', 
        4 => 'Jueves', 
        5 => 'Viernes', 
        6 => 'Sábado', 
        7 => 'Domingo'
    ];

    $diaSumado = (int)date("N", strtotime($actual));

    $mensaje = $diaSumado;
    

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
        Introduce el dia: <br>
        <input type="number" name="dia"><br>
        Introduce el mes: <br>
        <input type="number" name="mes"> <br>
        Introduce el año: <br>
        <input type="year" name="year"> <br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <textarea name="" id="">
        <?php echo $mensaje; ?>
    </textarea>
</body>
</html>