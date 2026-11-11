
<?php 
    $mensaje = "";
    if (isset($_POST['enviar'])) {
        $hora = $_POST['horas'];
        $mins = $_POST['mins'];
        $segs = $_POST['segs'];
        $formatos = $_POST['formatos'];

        if ($formatos === "normal") {
            if ($hora < 0 || $hora > 23 || $mins < 0 || $mins > 59 || $segs < 0 || $segs > 59) {
                $mensaje = "Debes introducir una hora correcta.";
            } else {
                $mensaje = $hora . ":" . $mins . ":" . $segs;
            }
        } else if ($formatos === "corto") {
            if ($hora < 0 || $hora > 23 || $mins < 0 || $mins > 59) {
                $mensaje = "Debes introducir una hora correcta.";
            } else {
                $mensaje = $hora . ":" . $mins;
            }
        } else if ($formatos === "AM/PM") {
            if ($hora < 0 || $hora > 23 || $mins < 0 || $mins > 59 || $segs < 0 || $segs > 59) {
                $mensaje = "Debes introducir una hora correcta.";
            } else {
                if ($hora < 12) {
                    $mensaje = $hora . ":" . $mins . ":" . $segs . " AM";
                } else if ($hora >= 12) {
                    $mensaje = $hora . ":" . $mins . ":" . $segs . " PM";
                }
            }
        }
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
        Hora: 
        <input type="number" name="horas"><br>

        Minutos: 
        <input type="number" name="mins"><br>

        Segundos: 
        <input type="number" name="segs"><br><br>

        <select name="formatos">
            <option value="normal">Formato: 00:00:00</option>
            <option value="corto">Formato: 00:00</option>
            <option value="AM/PM">Formato: 12 Horas(12AM/PM)</option>
        </select><br>

        <input type="submit" name="enviar" value="Enviar">  
    </form>
    <br>
    <textarea name="mensaje" rows="5" cols="40">
        <?php echo $mensaje; ?>
    </textarea>
</body>
</html>