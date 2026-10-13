<?php 

session_start(); 

if (isset($_POST['numA']) && isset($_POST['numS'])) {

    $numA = $_POST['numA'];
    $numS = $_POST['numS'];

    $numero = $_SESSION['lista_generada'];

    foreach ($numero as $n) {
        if ($n == $numA) {
            echo " | ";
            echo '<span style="color: red;">' . $numS . '</span>';
        } else {
            echo " | $n";
        }
    }

} else {

    $numero = [];

    for ($i = 0; $i < 100; $i++) {
        $randoms = rand(0, 20);
        $numero[$i] = $randoms;
    }

    $_SESSION['lista_generada'] = $numero;

    foreach ($numero as $n) {
        echo " | $n";
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
    <form action="ejercicio4.php" method="post">
        <br>
        Introduzca el numero a cambiar: <br>
        <input type="number" name="numA"><br>
        Introduzca el numero a sustituir: <br>
        <input type="number" name="numS"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>