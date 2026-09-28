<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$x = 24;
$pi = 3.1416;
$animal = "conejo";
$saludo = "hola caracola";
echo $x, "<br>", $pi, "<br>", $animal, "<br>", $saludo;
?>
<?php
$foo = "0"; //$foo es string (ASCII 48)
$foo = 2; //$foo es ahora un integer (2)
$foo = $foo + 1.3; //$foo es ahora un float (3.3)
$foo = 5 + "10 caracolas"; //$foo es ahora un integer (15)
?>

</body>
</html>
