<?php

if (!isset($_REQUEST('carta'))) {
    $carta = [];
} else {
    $carta = unserialize(base64_decode($_REQUEST['carta']));
    $carta[] = []; 
}

$comidas = [
    "Pizza" => ["jamon", "atun", "bacon", "pepperoni"],
    "Hamburguesa" => ["lechuga", "tomate", "queso"],
    "Perritos" => ["lechuga", "cebolla", "patata"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php foreach($comidas as $i => $valor): ?>

<?php endforeach; ?>

</body>
</html>