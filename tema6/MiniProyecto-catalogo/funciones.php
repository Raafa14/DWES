<?php 
declare(strict_types=1);


function coincideNombre(array $producto, string $filtro): bool {
    $filtroL = trim($filtro);
    if ($filtroL === "") {
        return true;
    }
    $nombreMinus = mb_strtolower($producto['nombre']);
    $filtroMinus = mb_strtolower($filtroL);
    return str_contains($nombreMinus, $filtroMinus);
}

function filtrarProductos(array $productos, string $filtro): array {
    $resultado = [];
    foreach ($productos as $producto) {
        if (coincideNombre($producto, $filtro)) {
            $resultado[] = $producto;
        }
    }
    return $resultado;
}

function valorInventario(array $productos): float {
    $resultado = 0.0;
    foreach ($productos as $producto) {
        $resultado += $producto['precio'] * $producto['stock'];
    }
    return $resultado;
}

function fechaValida(string $fecha): bool {
    $resultado = explode('-', $fecha);
    if (count($resultado) !== 3) {
        return false;
    }
    $ano = (int)$resultado[0];
    $mes = (int)$resultado[1];
    $dia = (int)$resultado[2];
    return checkdate($mes, $dia, $ano);
}
?>