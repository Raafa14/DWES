<?php
session_start();

// 1. Creamos el carrito vacío si aún no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// 2. Arrays con toda la información de los productos
$nombres = [
    'agua'     => 'Agua Bendita de la Vida',
    'orbe'     => 'Orbe de la Avaricia',
    'mata'     => 'Matacaballeros',
    'colmillo' => 'Colmillo de Kasaka'
];

$precios = [
    'agua'     => 250,
    'orbe'     => 160,
    'mata'     => 85,
    'colmillo' => 45
];

$imagenes = [
    'agua'     => './img/agua.jpg',
    'orbe'     => './img/orbe.jpg',
    'mata'     => './img/mata.jpg',
    'colmillo' => './img/colmillo.jpg'
];

$detalles = [
    'agua'     => '<strong>Categoría:</strong> Consumible | <strong>Rango:</strong> S | <strong>Origen:</strong> Castillo Demoníaco<br><br>Poción alquímica de grado mítico creada a partir de la sangre purificada del Rey Demonio Baran, un fragmento del Árbol del Mundo y agua de manantial del Bosque del Eco. Se presenta en un frasco de cristal tallado con acabados plateados que resguarda una esencia carmesí brillante rodeada de destellos púrpura y dorados. Al ingerirse, desata una magia restauradora capaz de erradicar al instante cualquier enfermedad, maldición, veneno o estado alterado, sin importar su gravedad.',
    'orbe'     => '<strong>Categoría:</strong> Artefacto Mágico | <strong>Rango:</strong> A | <strong>Origen:</strong> Botín de Vulcan<br><br>Reliquia arcana formada por una esfera carmesí incandescente envuelta en llamas vivas y engarzada en una base metálica oscura con forma de garras. Concebida originalmente para potenciar a lanzadores de conjuros de alto nivel, posee el efecto pasivo Deseo de Destrucción, que duplica (+100 %) el poder de ataque mágico de su portador y amplifica tanto el alcance como la densidad del maná proyectado.',
    'mata'     => '<strong>Categoría:</strong> Daga | <strong>Rango:</strong> B | <strong>Ataque:</strong> +75<br><br>Arma cuerpo a cuerpo de hoja curva y filo dentado en tonos rojizos incandescentes con inscripciones rúnicas, rematada por una guarda dorada y empuñadura oscura. Diseñada específicamente para perforar defensas blindadas, activa la habilidad pasiva Asesino de Caballeros, que inflige un 25 % de daño adicional contra enemigos que portan armaduras pesadas y permite atravesar placas metálicas con facilidad.',
    'colmillo' => '<strong>Categoría:</strong> Daga | <strong>Rango:</strong> C | <strong>Ataque:</strong> +25<br><br>Daga ligera tallada directamente a partir del colmillo venenoso del jefe de mazmorra Kasaka. Su hoja curva emite un resplandor azul eléctrico del que gotea constantemente una toxina luminosa, equilibrada con una empuñadura vendada para ataques veloces. Cada impacto aplica dos efectos de estado simultáneos: Parálisis, que inmoviliza temporalmente al objetivo, y Hemorragia, que provoca una pérdida continua de salud por segundo.'
];

// 3. Si pulsas COMPRAR (funciona tanto desde el catálogo como desde el detalle):
if (isset($_POST['comprar'])) {
    $producto = $_POST['comprar'];

    if (isset($_SESSION['carrito'][$producto])) {
        $_SESSION['carrito'][$producto] = $_SESSION['carrito'][$producto] + 1;
    } else {
        $_SESSION['carrito'][$producto] = 1;
    }
}

// 4. Si pulsas ELIMINAR:
if (isset($_POST['eliminar'])) {
    $producto = $_POST['eliminar'];
    unset($_SESSION['carrito'][$producto]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Solo Leveling - Detalle</title>
    <link rel="stylesheet" href="ejercicio5.css">
</head>
<body>
    <main class="cajas">
        <!-- COLUMNA IZQUIERDA: CAMBIA ENTRE DETALLE Y CATÁLOGO -->
        <section class="container">

            <?php if (isset($_GET['detalle']) && isset($nombres[$_GET['detalle']])): ?>
                <!-- VISTA DE DETALLE DE UN PRODUCTO -->
                <?php $id = $_GET['detalle']; ?>

                <div class="container__caja1">
                    <h2><?php echo $nombres[$id]; ?></h2>
                    <div class="container__caja--dividir">
                        <img src="<?php echo $imagenes[$id]; ?>" class="img1">
                        <div>
                            <p><strong>Precio: <?php echo $precios[$id]; ?> €</strong></p>
                            
                            <!-- Al no tener 'action', mantiene ?detalle=... en la URL al comprar -->
                            <form method="post" class="form">
                                <button type="submit" name="comprar" value="<?php echo $id; ?>" class="boton">Comprar</button>
                            </form>

                            <a href="ejercicio5.php" class="boton">Volver</a>
                        </div>
                    </div>
                    <p><?php echo $detalles[$id]; ?></p>
                </div>

            <?php else: ?>
                <!-- VISTA NORMAL DEL CATÁLOGO -->
                <div class="container__caja1">
                    <h2>Agua Bendita de la Vida</h2>
                    <div class="container__caja--dividir">
                        <img src="./img/agua.jpg" class="img1">
                        <div>
                            <p><strong>Precio: 250 €</strong></p>
                            <form method="post" class="form">
                                <button type="submit" name="comprar" value="agua" class="boton">Comprar</button>
                            </form>
                            <form method="get" class="form">
                                <button type="submit" name="detalle" value="agua" class="boton">Detalle</button>
                            </form>
                        </div>
                    </div>
                    <p>Poción consumible de grado mítico contenida en un frasco cristalino ornamentado con líquido carmesí brillante y destellos púrpura y dorados. Al tratarse de un objeto único de rango S capaz de curar cualquier enfermedad o estado alterado al instante, es el artículo más valioso de la tienda.</p>
                </div>

                <div class="container__caja1">
                    <h2>Orbe de la Avaricia</h2>
                    <div class="container__caja--dividir">
                        <img src="./img/orbe.jpg" class="img1">
                        <div>
                            <p><strong>Precio: 160 €</strong></p>
                            <form method="post" class="form">
                                <button type="submit" name="comprar" value="orbe" class="boton">Comprar</button>
                            </form>
                            <form method="get" class="form">
                                <button type="submit" name="detalle" value="orbe" class="boton">Detalle</button>
                            </form>
                        </div>
                    </div>
                    <p>Reliquia mágica esférica de brillo carmesí envuelta en llamas y engarzada en una base metálica oscura con forma de garras. Este artefacto de rango A duplica el poder de ataque mágico de quien lo porta, aumentando el alcance y la potencia de los hechizos, lo que justifica su coste elevado.</p>
                </div>

                <div class="container__caja1">
                    <h2>Matacaballeros</h2>
                    <div class="container__caja--dividir">
                        <img src="./img/mata.jpg" class="img1">
                        <div>
                            <p><strong>Precio: 85 €</strong></p>
                            <form method="post" class="form">
                                <button type="submit" name="comprar" value="mata" class="boton">Comprar</button>
                            </form>
                            <form method="get" class="form">
                                <button type="submit" name="detalle" value="mata" class="boton">Detalle</button>
                            </form>
                        </div>
                    </div>
                    <p>Daga de filo dentado con inscripciones rúnicas en tonos rojizos y energía ígnea rodeada de chispas, rematada con una guarda dorada y empuñadura oscura. Está diseñada para perforar defensas pesadas e infligir daño adicional contra enemigos con armadura, situándose en un rango de precio intermedio por su bonificación especializada.</p>
                </div>

                <div class="container__caja1">
                    <h2>Colmillo de Kasaka</h2>
                    <div class="container__caja--dividir">
                        <img src="./img/colmillo.jpg" class="img1">
                        <div>
                            <p><strong>Precio: 45 €</strong></p>
                            <form method="post" class="form">
                                <button type="submit" name="comprar" value="colmillo" class="boton">Comprar</button>
                            </form>
                            <form method="get" class="form">
                                <button type="submit" name="detalle" value="colmillo" class="boton">Detalle</button>
                            </form>
                        </div>
                    </div>
                    <p>Daga ligera forjada a partir del colmillo del jefe Kasaka, caracterizada por su hoja curva de brillo azulado, empuñadura vendada y un aura líquida venenosa que gotea del filo. Es un arma de ataque rápido que inflige parálisis y hemorragia con cada corte, con un precio accesible al ser un equipo inicial de rango C.</p>
                </div>
            <?php endif; ?>

        </section>

        <!-- COLUMNA DERECHA: CARRITO (IGUAL QUE EN EL EJERCICIO 5) -->
        <section class="carrito">
            <h1>Carrito</h1>

            <?php
            $total = 0;

            foreach ($_SESSION['carrito'] as $producto => $cantidad):
                $nombre = $nombres[$producto];
                $precio = $precios[$producto];
                $imagen = $imagenes[$producto];
                $subtotal = $precio * $cantidad;
                $total = $total + $subtotal;
            ?>
                <div>
                    <p><strong><?php echo $nombre; ?></strong></p>
                    <img src="<?= $imagen ?>" class="img1">
                    <p>Cantidad: <?php echo $cantidad; ?> | Subtotal: <?php echo $subtotal; ?> €</p>

                    <form method="post">
                        <button type="submit" name="eliminar" value="<?php echo $producto; ?>" class="boton">Eliminar</button>
                    </form>
                    <hr>
                </div>
            <?php endforeach; ?>

            <h2>Total: <?php echo $total; ?> €</h2>
        </section>
    </main>
</body>
</html>