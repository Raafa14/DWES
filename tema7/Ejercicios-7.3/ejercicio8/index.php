<?php 

// if (isset($_COOKIE['diccionario'])) {
//     json_decode('diccionario', true);
// } else {
//     $diccionario = [
//     'car' => 'coche',
//     'red' => 'rojo',
//     'programming' => 'programacion',
//     'glasses' => 'gafas',
//     'mouse' => 'raton',
//     'keyboard' => 'teclado',
//     'screen' => 'pantalla',
//     'headphones' => 'auriculares'
// ];
//     setcookie('diccionario', $diccionario, time() + 3600);
// }

$diccionario = [
    'car' => 'coche',
    'red' => 'rojo',
    'programming' => 'programacion',
    'glasses' => 'gafas',
    'mouse' => 'raton',
    'keyboard' => 'teclado',
    'screen' => 'pantalla',
    'headphones' => 'auriculares'
];

$palabras = array_rand($diccionario, 5);

$aciertos = 0;
$fallos = 0;

if (isset($_POST['respuestas'])) {
    foreach ($_POST['respuestas'] as $ingles => $valor) {
        if ($diccionario[$ingles] == $valor) {
            $aciertos++;
        } else {
            $fallos++;
        }
    }
}

echo "Aciertos: " . $aciertos . "<br>";
echo "Fallos: " . $fallos;

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
        Introduce su traducion: <br>
        <?php foreach ($palabras as $palabraIngles): ?>
            En ingles: <?= $palabraIngles ?> | En español <input type="text" name="respuestas[<?= $palabraIngles ?>]"><br>
        <?php endforeach; ?>
        <input type="submit" name="enviar" value="Enviar">  
    </form>
</body>
</html>