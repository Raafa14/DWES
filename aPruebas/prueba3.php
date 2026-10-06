<?php 

    $productos = [
    [
    "nombre"=>"Ratón", "precio"=>12, "stock"=>5
    ],
    [
    "nombre"=>"teclado", "precio"=>56, "stock"=>12
    ],
    [
    "nombre"=>"monitor", "precio"=>198, "stock"=>15
    ],
    [
    "nombre"=>"torre", "precio"=>1532, "stock"=>3
    ]
    ];

    foreach ($productos as $producto) {
        echo $producto["nombre"];
        echo "<br>";
        echo $producto["precio"];
        echo "<br>";
        echo $producto["stock"];
        echo "<br>";
    };

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