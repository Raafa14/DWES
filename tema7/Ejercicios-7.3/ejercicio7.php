<?php
// 1. Color por defecto si es la primera visita y no hay cookie
$color = "#ffffff";

// 2. Si ya existe la cookie de una visita anterior, recuperamos ese color
if (isset($_COOKIE['color_fondo'])) {
    $color = $_COOKIE['color_fondo'];
}

// 3. Si el usuario acaba de enviar el formulario, actualizamos el color y la cookie
if (isset($_POST['color_elegido'])) {
    $color = $_POST['color_elegido'];
    // Guardamos la cookie durante 1 hora (3600 segundos)
    setcookie("color_fondo", $color, time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Cookies</title>
</head>
<!-- 4. Aplicamos el color de fondo directamente al body -->
<body style="background-color: <?php echo $color; ?>;">

    <h1>Ejercicio 7: Color de fondo con Cookies</h1>
    <p>Selecciona un color en el formulario y guarda tu preferencia. Si recargas la página, el color se mantendrá.</p>

    <form action="" method="POST">
        <label for="color_elegido">Elige un color de fondo:</label>
        
        <select name="color_elegido" id="color_elegido">
            <option value="#ffffff" <?php if ($color == "#ffffff") echo "selected"; ?>>Blanco</option>
            <option value="#ffcccc" <?php if ($color == "#ffcccc") echo "selected"; ?>>Rojo suave</option>
            <option value="#cce5ff" <?php if ($color == "#cce5ff") echo "selected"; ?>>Azul suave</option>
            <option value="#d4edda" <?php if ($color == "#d4edda") echo "selected"; ?>>Verde suave</option>
        </select>

        <button type="submit">Guardar color</button>
    </form>

</body>
</html>