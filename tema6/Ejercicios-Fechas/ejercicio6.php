<?php
$mensaje = "";

if (isset($_POST['enviar'])) {
    $anios = $_POST['anios'];
    $meses = $_POST['meses'];
    $dias = $_POST['dias'];

    $fechaFutura = strtotime("+$anios years +$meses months +$dias days");
    
    $diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    $numeroDia = date("w", $fechaFutura);

    $mensaje = "La fecha resultante es: " . date("d/m/Y", $fechaFutura) . "<br>";
    $mensaje .= "Caerá en: <b>" . $diasSemana[$numeroDia] . "</b>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="" method="post">
        Años: <input type="number" name="anios" value="0" required><br>
        Meses: <input type="number" name="meses" value="0" required><br>
        Días: <input type="number" name="dias" value="0" required><br>
        <input type="submit" name="enviar" value="Calcular día">
    </form>

    <p><?php echo $mensaje; ?></p>
</body>
</html>