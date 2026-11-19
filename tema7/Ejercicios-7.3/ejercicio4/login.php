<?php 
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: ejercicio4.php");
    exit;
}
$error = "";
if (isset($_POST['enviar'])) {
    $nombre = trim($_POST['nombre']);
    $contra = trim($_POST['contra']);

    if ($nombre) {
        $_SESSION['usuario'] = $nombre;
        header("Location: ejercicio4.php");
        exit;
    } else {
        $error = "Usuario no introducido.";
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

    <h2>Iniciar Sesión</h2>

    <?php if ($error !== ""): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <input type="text" name="nombre"><br>
        <input type="password" name="contra"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>