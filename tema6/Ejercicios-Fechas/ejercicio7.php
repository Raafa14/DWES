<?php
$mensaje = "";

if (isset($_POST['enviar'])) {
    $nacimiento = strtotime($_POST['nacimiento']);
    $futura = strtotime($_POST['futura']);

    $segundosDiferencia = $futura - $nacimiento;
    $segundosPorAnio = 60 * 60 * 24 * 365.25;
    
    $edad = floor($segundosDiferencia / $segundosPorAnio);

    $mensaje = "En esa fecha tendrás <b>$edad</b> años.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <form method="post">
        Fecha de nacimiento: <input type="date" name="nacimiento" required><br>
        Fecha futura: <input type="date" name="futura" required><br>
        <input type="submit" name="enviar" value="Calcular edad">
    </form>

    <p><?php echo $mensaje; ?></p>
</body>
</html>