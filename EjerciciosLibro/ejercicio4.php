

<?php 
    if (!isset($_REQUEST['personas'])) {
    $personas = [
                    ['nombre'=>'Anita','sexo'=>'m','orientacion'=>'bis'],
                    ['nombre'=>'Lolita','sexo'=>'m','orientacion'=>'bis'],
                    ['nombre'=>'Pepito','sexo'=>'h','orientacion'=>'bis'],
                    ['nombre'=>'Juanito','sexo'=>'h','orientacion'=>'bis'],
                    ['nombre'=>'Roberto','sexo'=>'h','orientacion'=>'het'],
                    ['nombre'=>'Antonio','sexo'=>'h','orientacion'=>'het'],
                    ['nombre'=>'Manuela','sexo'=>'m','orientacion'=>'het'],
                    ['nombre'=>'Isabel','sexo'=>'m','orientacion'=>'het'],
                    ['nombre'=>'Jenifer','sexo'=>'m','orientacion'=>'hom'],
                    ['nombre'=>'Susan','sexo'=>'m','orientacion'=>'hom'],
                    ['nombre'=>'Peter','sexo'=>'h','orientacion'=>'hom'],
                    ['nombre'=>'Mike','sexo'=>'h','orientacion'=>'hom']
                ];
    }else{
        $personas=unserialize(base64_decode($_REQUEST['personas']));
        //$personas[$_REQUEST['nombre']] = $_REQUEST['sexo'];
    }
    $datosPersonas=base64_encode(serialize($personas));  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ejercicio4.css">
    <style>
        table {
         border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Introduce el nombre: <br>
        <input type="text" name="nombre" required><br>
        Introduce el sexo: <br>
        <input type="text" name="sexo" required><br>
        Introduce la orientacion: <br>
        <input type="text" name="orientacion" required><br>

        <input type="hidden" name="personas" value="<?= $datosPersonas ?>">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <h1>Para enviarlo a la otra pagina.</h1>
    <form action="ejercicio4-2.php" method="post">
        <input type="hidden" name="personas" value="<?= $datosPersonas ?>">
        <input type="submit" value="Enviar a la otra pagina">
    </form>

    <table>
    <tr>
        <?php foreach (array_keys($personas[0]) as $j): ?>
            <th><?= $j ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($personas as $i => $valor): ?>
        <tr>
            <?php foreach ($valor as $texto): ?>
                <td><?= $texto ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>