<?php
$mensaje = "";

if (isset($_POST['enviar'])) {
    $nombre1 = $_POST['nombre1'];
    $fecha1 = strtotime($_POST['fecha1']);
    
    $nombre2 = $_POST['nombre2'];
    $fecha2 = strtotime($_POST['fecha2']);

    $hoy = time();
    $segundosPorAnio = 60 * 60 * 24 * 365.25;

    $edad1 = floor(($hoy - $fecha1) / $segundosPorAnio);
    $edad2 = floor(($hoy - $fecha2) / $segundosPorAnio);

    $mensaje = "$nombre1 tiene $edad1 años.<br>";
    $mensaje .= "$nombre2 tiene $edad2 años.<br>";

    if ($fecha1 < $fecha2) {
        $mensaje .= "La persona mayor es: <b>$nombre1</b>";
    } elseif ($fecha2 < $fecha1) {
        $mensaje .= "La persona mayor es: <b>$nombre2</b>";
    } else {
        $mensaje .= "Ambos nacieron el mismo día.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <form method="post">
        Nombre 1: <input type="text" name="nombre1" required>
        Fecha nac. 1: <input type="date" name="fecha1" required><br><br>
        
        Nombre 2: <input type="text" name="nombre2" required>
        Fecha nac. 2: <input type="date" name="fecha2" required><br><br>
        
        <input type="submit" name="enviar" value="Comparar">
    </form>

    <p><?php echo $mensaje; ?></p>
</body>
</html>