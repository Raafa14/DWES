

<?php 
$mensaje = '';
$diasSemana = [
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo"
];

if (isset($_POST['enviar'])) {
    $fecha = $_POST['fecha'];
    $dia = date('N', strtotime($fecha));

    //Forma con Array
    $esp = $diasSemana[$dia];
    $mensaje = "Hoy es " . $esp;

    //Forma con switch
    // switch ($dia){
    //     case 1:
    //         $mensaje = "Hoy es Lunes";
    //         break;
    //     case 2: 
    //         $mensaje = "Hoy es Martes";
    //         break;
    //     case 3: 
    //         $mensaje = "Hoy es Miercoles";
    //         break;
    //     case 4: 
    //         $mensaje = "Hoy es Jueves";
    //         break;
    //     case 5: 
    //         $mensaje = "Hoy es Viernes";
    //         break;
    //     case 6: 
    //         $mensaje = "Hoy es Sabado";
    //         break;
    //     case 7: 
    //         $mensaje = "Hoy es Domingo";
    //         break;
    // };
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