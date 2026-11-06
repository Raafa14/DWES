<?php 
require_once __DIR__ . "/funciones.php";
require_once __DIR__ . "/datos.php";

$busqueda = trim($_GET['buscar'] ?? '');
$productosVisibles = filtrarProductos($productos, $busqueda);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>