<?php
require_once __DIR__ . "/controlAcceso.php";

// Obtenemos las dos tarjetas usando dameTarjeta()
$tarjetaAdmin = dameTarjeta('admin');
$tarjetaEstandar = dameTarjeta('estandar');

// Variables para controlar el resultado del formulario
$formularioEnviado = false;
$accesoPermitido = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formularioEnviado = true;

    $perfil = $_POST['perfil'] ?? '';
    $claveIntroducida = $_POST['clave'] ?? '';
    $filaPedida = $_POST['fila_pedida'] ?? 0;
    $columnaPedida = $_POST['columna_pedida'] ?? '';

    // Obtenemos la matriz del perfil seleccionado y comprobamos
    $tarjetaUsuario = dameTarjeta($perfil);
    $coordenadas = ['fila' => $filaPedida, 'columna' => $columnaPedida];
    
    $accesoPermitido = compruebaClave($tarjetaUsuario, $coordenadas, $claveIntroducida);
}

// Generamos una coordenada aleatoria para la siguiente petición
$letrasDisponibles = ['A', 'B', 'C', 'D', 'E'];
$filaAzar = rand(1, 5);
$columnaAzar = $letrasDisponibles[array_rand($letrasDisponibles)];
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
        td, th, tr {
            border: 1px solid black;
            padding: 5px;
        }
        option:nth-child(1) {
            color: grey;
        }
        .container {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>

<!-- Tablas mostradas mediante la función imprimeTarjeta() -->
    <div class="contenedor-tarjetas">
        <?= imprimeTarjeta($tarjetaAdmin, 'Administrador') ?>
        <?= imprimeTarjeta($tarjetaEstandar, 'Usuario estándar') ?>
    </div>

    <?php if (!$formularioEnviado): ?>
        <!-- FORMULARIO DE ACCESO -->
        <form action="" method="post">
            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil" required>
                <option value="admin">Administrador</option>
                <option value="estandar">Usuario estándar</option>
            </select>
            <br><br>

            <p><strong>INTRODUCE LA SIGUIENTE COORDENADA:</strong><br>
            <strong>COORDENADA Fila: <?= $filaAzar ?> Columna: <?= $columnaAzar ?></strong>
            <input type="text" name="clave" required></p>

            <!-- Campos ocultos para no perder la fila y columna elegidas al enviar -->
            <input type="hidden" name="fila_pedida" value="<?= $filaAzar ?>">
            <input type="hidden" name="columna_pedida" value="<?= $columnaAzar ?>">

            <input type="submit" value="COMPROBAR">
        </form>

    <?php else: ?>
        <!-- RESULTADO TRAS COMPROBAR -->
        <?php if ($accesoPermitido): ?>
            <div class="cuadro-resultado">
                <h3>Acceso Permitido</h3>
                <a href="https://proyectorafamiguel.lovable.app/" class="btn">CONTINUAR</a>
            </div>
        <?php else: ?>
            <div class="cuadro-resultado">
                <h3>Clave incorrecta. Acceso Restringido</h3>
                <a href="index.php" class="btn">VOLVER</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</body>
</html>