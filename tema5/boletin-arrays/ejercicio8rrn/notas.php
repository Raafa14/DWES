<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        Introduce 5 notas:<br>
        <label>Nota 1: <input type="number" step="0.1" name="notas[]" required></label><br>
        <label>Nota 2: <input type="number" step="0.1" name="notas[]" required></label><br>
        <label>Nota 3: <input type="number" step="0.1" name="notas[]" required></label><br>
        <label>Nota 4: <input type="number" step="0.1" name="notas[]" required></label><br>
        <label>Nota 5: <input type="number" step="0.1" name="notas[]" required></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notas = $_POST["notas"];

        $media = array_sum($notas) / count($notas);
        $maxima = max($notas);
        $minima = min($notas);

        echo "Resultados:";
        echo "Nota media: " . round($media, 2) . "<br>";
        echo "Nota maxima: " . $maxima . "<br>";
        echo "Nota minima: " . $minima . "<br>";
    }
    ?>

</body>
</html>