<?php
    $mensaje = "";

    if (isset($_POST['enviar'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $year = $_POST['year'];
        $formato = $_POST['formatos'];

        if (checkdate($mes, $dia, $year)) {
            
            if ($formato == "d-m-Y") {
                $mensaje = $dia . "/" . $mes . "/" . $year;
            } else if ($formato == "Y-m-d") {
                $mensaje = $year . "-" . $mes . "-" . $dia;
            } else if ($formato == "m-d-Y") {
                $mensaje = $mes . "/" . $dia . "/" . $year;
            }

        } else {
            $mensaje = "La fecha no es correcta";
        }
    } else {
        $mensaje = "Rellena todo, para seguir con la actividad";
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validador de Fechas</title>
</head>
<body>

    <form action="" method="post">
        Día: 
        <input type="number" name="dia"><br>

        Mes: 
        <input type="number" name="mes"><br>

        Año: 
        <input type="number" name="year"><br><br>

        <select name="formatos">
            <option value="d-m-Y">Día/Mes/Año</option>
            <option value="Y-m-d">Año-Mes-Día</option>
            <option value="m-d-Y">Mes/Día/Año</option>
        </select>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <br>
    <textarea name="mensaje" rows="5" cols="40">
        <?php echo $mensaje; ?>
    </textarea>

</body>
</html>