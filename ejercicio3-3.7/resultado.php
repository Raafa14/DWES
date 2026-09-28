<?php
// Recogida de datos del formulario con valores por defecto
$colorFondo  = $_POST['color_fondo'] ?? '#ffffff';
$colorTexto  = $_POST['color_texto'] ?? '#000000';
$fuente      = $_POST['fuente']      ?? 'Arial';
$alineacion  = $_POST['alineacion']  ?? 'left';
$tamano      = $_POST['tamano']      ?? '3';
$banner      = $_POST['banner']      ?? 'https://picsum.photos/id/1018/800/200';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Personalizada</title>
</head>
<body bgcolor="<?php echo htmlspecialchars($colorFondo); ?>" text="<?php echo htmlspecialchars($colorTexto); ?>">

    <div align="<?php echo htmlspecialchars($alineacion); ?>">

        <!-- Banner seleccionado -->
        <p>
            <img src="<?php echo htmlspecialchars($banner); ?>" alt="Banner seleccionado" width="800" height="200">
        </p>

        <!-- Contenedor de tipografía tradicional -->
        <font face="<?php echo htmlspecialchars($fuente); ?>" size="<?php echo htmlspecialchars($tamano); ?>">
            
            <h1>Página Personalizada</h1>

            <p>
                Este texto demuestra que la configuración enviada desde el formulario se ha aplicado
                correctamente mediante variables procesadas en PHP.
            </p>

            <p>
                El color de fondo se controla mediante el atributo <code>bgcolor</code>, el color del texto
                con <code>text</code> en la etiqueta <code>&lt;body&gt;</code>, la alineación con el atributo
                <code>align</code> del contenedor y la tipografía con la etiqueta <code>&lt;font&gt;</code>.
            </p>

            <p>
                <a href="index.html">← Volver al formulario</a>
            </p>

        </font>

    </div>

</body>
</html>