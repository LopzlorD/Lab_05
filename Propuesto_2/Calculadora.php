<?php

$cant_gaseosa = isset($_GET['cant_gaseosa']) ? intval($_GET['cant_gaseosa']) : 0;
$precio_gaseosa = isset($_GET['precio_gaseosa']) ? floatval($_GET['precio_gaseosa']) : 0;

$nuevo_precio = $precio_gaseosa * 0.95;

$imp_compra = $cant_gaseosa * $nuevo_precio;

$imp_descuento = $imp_compra * 0.07;

$imp_pagar = $imp_compra - $imp_descuento;

$obsequio = 2 * $cant_gaseosa;

echo "Nuevo precio: " . $nuevo_precio . "<br>";
echo "Importe de compra: " . $imp_compra . "<br>";
echo "Importe de descuento: " . $imp_descuento . "<br>";
echo "Importe a pagar: " . $imp_pagar . "<br>";
echo "Galletas de obsequio: " . $obsequio;
?>
