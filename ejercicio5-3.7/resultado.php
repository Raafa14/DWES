
<?php 

    $d = $_POST['d'];
    $h = $_POST['h'];
    $caudal = $_POST['l'];
    $pi = 3.1416;

    $radio = $d / 2;
    $volumen = $pi * ($radio * $radio) * $h;
    $litrosTotales = $volumen * 1000;
    $minutosTotales = $litrosTotales / $caudal;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if ($minutosTotales >= 60) {

    $horasTotales = floor($minutosTotales / 60);
    $minutosRestantes = $minutosTotales % 60;

    echo "Tardaría ". $horasTotales ." horas y ". $minutosRestantes ." minutos en llenarse el deposito.";

} else {

    echo "Tardaría ". round($minutosTotales) ." minutos en llenarse el deposito.";

}

?>
    
</body>
</html>