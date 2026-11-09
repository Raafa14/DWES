
<?php 
require_once __DIR__ . "/funciones.php";


if (!isset($_POST['numsIntro'])) {
    $nSerie = null;
    $texto = '';
    $numsIntro = [];
} else {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $nSerie = $_POST['nSerie'];
    $texto = $_POST['texto'];
    $numsIntro = [$n1, $n2, $n3, $n4, $n5, $n6];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    Introduce numero del 1 al 49.<br>
    <input type="number" name="n1" min="1" max="49">
    <input type="number" name="n2" min="1" max="49">
    <input type="number" name="n3" min="1" max="49">
    <input type="number" name="n4" min="1" max="49">
    <input type="number" name="n5" min="1" max="49">
    <input type="number" name="n6" min="1" max="49"><br>
    Introduce el numero de serie del 1 al 999<br>
    <input type="number" name="nSerie" min="1" max="999"><br>
    <br>
    <input type="hidden" name="numsIntro">
    
    Introduce un texto(Opcional)<br>
    <input type="text" name="texto"><br><br>
    <input type="submit" value="Enviar datos">
    </form>
    <hr>
    <?php imprimeApuesta($numsIntro, $texto) ?>

</body>
</html>