<?php
// Lógica de comprobación en PHP
$mensaje = "";
$acertado = false;
$fallado = false;
$solucion = "naruto"; // Palabra a adivinar

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $respuesta = isset($_POST["comprobar"]) ? strtolower(trim($_POST["comprobar"])) : "";
    
    if ($respuesta === $solucion) {
        $acertado = true;
        $mensaje = "¡Felicidades! Has acertado.";
    } else {
        $fallado = true;
        $mensaje = "Has fallado. Inténtalo de nuevo.";
    }
}

// Casilla fija visible desde el inicio (por ejemplo la casilla 5, la del centro)
$casillaFija = 5;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina la imagen</title>
    <style>
        /* Cuadrícula 3x3 */
        .naruto {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            width: 300px;
            height: 300px;
            border: 1px solid black;
            margin-bottom: 15px;
        }

        /* Cada una de las 9 casillas */
        .pieza {
            width: 100px;
            height: 100px;
            position: relative;
            background-image: url('naruto.jpg');
            background-size: 300px 300px;
            box-sizing: border-box;
            border: 1px solid #444;
        }

        /* Coordenadas de corte para cada celda */
        .p1 { background-position: 0 0; }
        .p2 { background-position: -100px 0; }
        .p3 { background-position: -200px 0; }
        .p4 { background-position: 0 -100px; }
        .p5 { background-position: -100px -100px; }
        .p6 { background-position: -200px -100px; }
        .p7 { background-position: 0 -200px; }
        .p8 { background-position: -100px -200px; }
        .p9 { background-position: -200px -200px; }

        /* Ocultamos los checkboxes de control */
        input[type="checkbox"] {
            display: none;
        }

        /* Tapa gris sobre cada pieza */
        .tapa {
            display: block;
            width: 100%;
            height: 100%;
            background-color: #bbb;
            cursor: pointer;
        }

        /* Temporizador de 2 segundos en puro CSS */
        @keyframes destapar2s {
            0%   { opacity: 0; pointer-events: none; }
            95%  { opacity: 0; pointer-events: none; }
            100% { opacity: 1; pointer-events: auto; }
        }

        /* Al pulsar la tapa, el checkbox se activa y ejecuta la animación de 2 segundos */
        input[type="checkbox"]:checked + .tapa {
            animation: destapar2s 2s forwards;
        }
    </style>
</head>
<body>

    <!-- Mosaico 3x3 -->
    <div class="naruto">
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <div class="pieza p<?php echo $i; ?>">
                <?php if (!$acertado && $i !== $casillaFija): ?>
                    <!-- Si no está acertado y no es la fija, lleva tapa interactiva -->
                    <input type="checkbox" id="check<?php echo $i; ?>">
                    <label for="check<?php echo $i; ?>" class="tapa"></label>
                <?php endif; ?>
            </div>
        <?php endfor; ?>
    </div>

    <?php if (!empty($mensaje)): ?>
        <p><strong><?php echo $mensaje; ?></strong></p>
    <?php endif; ?>

    <!-- Formulario -->
    <form action="" method="post">
        <?php if ($fallado): ?>
            <!-- Si falló: solo botón volver para reintentar -->
            <a href=""><button type="button">Volver</button></a>
        <?php else: ?>
            Como se llama el trozo de imagen que ves:<br>
            <input type="text" name="comprobar" class="comprobar" <?php if ($acertado) echo "disabled"; ?>>
            <input type="submit" value="Enviar" <?php if ($acertado) echo "disabled"; ?>>
        <?php endif; ?>
    </form>

</body>
</html>