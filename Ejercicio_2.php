<?php

$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

function calcularTotal($carrito) {
    $total = 0;

    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];
        $total += $subtotal;
    }

    return $total;
}

foreach ($carrito as $item) {
    $nombre = $item["producto"];
    $precio = $item["precio"];
    $cantidad = $item["cantidad"];
    $subtotal = $precio * $cantidad;

    echo "Producto: $nombre<br>";
    echo "Precio unitario: $precio €<br>";
    echo "Cantidad: $cantidad<br>";
    echo "Subtotal: $subtotal €<br><br>";
}
// Usa una función calcularTotal($carrito).
$totalSinDescuento = calcularTotal($carrito);

$descuento = 0;

if ($totalSinDescuento > 1000) {
    $descuento = 0.10;
} elseif ($totalSinDescuento > 500) {
    $descuento = 0.05;
}

$montoDescuento = $totalSinDescuento * $descuento;
$totalFinal = $totalSinDescuento - $montoDescuento;

echo "<hr>";
echo "Total general: $totalSinDescuento €<br>";
echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
echo "Total final: $totalFinal €<br>";

?>
