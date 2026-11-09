<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catálogo de productos</title>
</head>

<body>
    <?php
        require_once __DIR__ . "/datos.php";
        require_once __DIR__ . "/funciones.php";

        if (isset($_GET["busqueda"])) {
            $busqueda = $_GET["busqueda"];
        } else {
            $busqueda = "";
        }

        $productosFiltrados = filtrarProductos($productos, $busqueda);
    ?>

    <h1>Catálogo de productos</h1>

    <form method="GET">
        <label>Buscar producto:</label>
        <input type="text" name="busqueda">
        <button type="submit">Buscar</button>
    </form>

    <br><br>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Caducidad</th>
        </tr>
        <?php foreach ($productosFiltrados as $producto): ?>
            <tr>
                <td><?= htmlspecialchars($producto["nombre"]) ?></td>
                <td><?= htmlspecialchars($producto["precio"]) ?> €</td>
                <td><?= htmlspecialchars($producto["stock"]) ?></td>
                <td><?= htmlspecialchars($producto["caducidad"]) ?></td>
            </tr>
            <?php
                if ($producto["caducidad"] < date("Y-m-d")) {
                    echo "<tr><td colspan='4' style='background-color:tomato'>Producto caducado</td></tr>";
                }
            ?>
        <?php endforeach; ?>
    </table>

    <h3>Valor total del inventario:</h3>

    <p><?= valorInventario($productos) ?> €</p>

</body>

</html>