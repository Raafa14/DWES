<?php 
$extensiones = [
    'html' => 'HyperText Markup Language',
    'css'  => 'Hojas de estilo en cascada',
    'php'  => 'Lenguaje de programacion de servidor',
    'java' => 'Lenguaje de programacion compilado',
];

if (isset($_POST['valor'])) {

    $busqueda = strtolower(trim($_POST['valor']));

    if (array_key_exists($busqueda, $extensiones)) {
        echo "Descripcion: " . $extensiones[$busqueda];
    } else {
        echo "Extension no encontrada.";
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
    <form action="diccionario.php" method="post">
        Introduce una extension:<br>
        <input type="text" name="valor"><br>

        <input type="submit" value="Introducir">
    </form>
</body>
</html>