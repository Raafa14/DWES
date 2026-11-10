<?php require_once __DIR__ . "/index.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>