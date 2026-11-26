<?php 
session_start();
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

if (!isset($_SESSION['diccionario'])) {
    $_SESSION['diccionario'] = [
        'car' => 'coche',
        'red' => 'rojo',
        'programming' => 'programacion',
        'glasses' => 'gafas',
        'mouse' => 'raton',
        'keyboard' => 'teclado',
        'screen' => 'pantalla',
        'headphones' => 'auriculares'
    ];
} 
$diccionario = $_SESSION['diccionario'];

$palabras = array_rand($diccionario, 5);

$aciertos = 0;
$fallos = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            font-weight: bold;
            color: red;
        }
        .acierto {
            font-weight: bold;
            color: green;
        }
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Introduce su traducion: <br>
        <?php foreach ($palabras as $palabraIngles): ?>
            En ingles: <?= $palabraIngles ?> | En español <input type="text" name="respuestas[<?= $palabraIngles ?>]"><br>
        <?php endforeach; ?>
        <input type="submit" name="enviar" value="Enviar">  
        <a href="index.php"><button type="button">Jugar otra vez</button></a>
        <a href="admin.php"><button type="button">Administrar las palabras</button></a>
    </form>

    <?php 
        if (isset($_POST['respuestas'])) {
            foreach ($_POST['respuestas'] as $ingles => $valor) {
                $valor = mb_strtolower(trim($valor));

                if (!is_numeric($valor)) {
                    if ($diccionario[$ingles] == $valor) {
                        echo "<p class='acierto'>" . $valor . " Es Correcto </p>";
                        $aciertos++;
                    } else {
                        echo "<p class='error'>" . $valor . " Es Incorrecto </p>";
                        $fallos++;
                    }
                } else {
                    echo "<p class='error'>" . $valor . " Es Numerico </p>";
                    $fallos++;
                }
            }
        }
    ?>
    
    <table>
        <thead>
            <tr>
                <td>Aciertos</td>
                <td>Fallos</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $aciertos ?></td>
                <td><?= $fallos ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>