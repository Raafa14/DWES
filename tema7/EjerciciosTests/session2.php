<?php

declare(strict_types=1);
session_start(); // Antes del HTML si debe enviar cabeceras.
$_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;
$visitas = (int) $_SESSION['visitas'];
?>
<!doctype html>
<html lang="es">

<body>
    <p>Visitas de esta sesión: <?= $visitas ?></p>
</body>

</html>