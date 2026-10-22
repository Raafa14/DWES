<?php

    if (!isset($_REQUEST['aspirantes'])) {
        $aspirantes=[];
    }else{
        $aspirantes=unserialize(base64_decode($_REQUEST['aspirantes']));
        $aspirantes[$_REQUEST['nombre']] = $_REQUEST['datos'];
    }
    $aspiranteTexto=base64_encode(serialize($aspirantes));    

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
        nombre:           <input type="text" name="nombre"><br>
        edad:             <input type="number" name="datos[edad]"><br>
        años experiencia: <input type="number" name="datos[anos]"><br>
        correo:           <input type="text" name="datos[correo]"><br>
        <input type="hidden" name='aspirantes' value=<?= $aspiranteTexto ?>>

        <input type="submit" value="Enviar">
    </form>

     
    <h3>Para enviar a pagina nueva: </h3>

    <form action="ejercicio5-listado.php" method="post">
        <input type="hidden" name="aspirantes" value=<?= $aspiranteTexto ?>>
        <input type="submit" value="Enviar todos los aspirantes">
    </form>
       

</body>
</html>