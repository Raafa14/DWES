<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Seleccione un horario: </h2><br>
    <form action="horario.php" method="post">
        <select name="dias">
            <option value="lunes">lunes</option>
            <option value="martes">martes</option>
            <option value="miercoles">miercoles</option>
            <option value="jueves">jueves</option>
            <option value="viernes">viernes</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <br>

    <?php 

        $dias = $_POST['dias'] ?? 'lunes';

        switch($dias) {

        case "lunes":
            echo "Programacion: ";
            break;
        case "martes":
            echo "PHP: ";
            break;
        case "miercoles":
            echo "INGLES: ";
            break;
        case "jueves":
            echo "Entorno Cliente: ";
            break;
        case "viernes":
            echo "Optativa: ";
            break;
        default:
            echo "Has introducido un dia erroneo.";
        }

    ?>

</body>
</html>