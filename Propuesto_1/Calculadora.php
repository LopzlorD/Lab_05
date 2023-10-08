<?php

if (isset($_GET['total_vendido']) && isset($_GET['cant_hijos']) && isset($_GET['sueldo_basico'])) {

    $total_vendido = floatval($_GET['total_vendido']);
    $cant_hijos = intval($_GET['cant_hijos']);
    $sueldo_basico = floatval($_GET['sueldo_basico']);

    $sueldo_final = 0.89 * ($sueldo_basico + 0.0075 * $total_vendido + 50 * $cant_hijos);

    echo "El sueldo final es: " . number_format($sueldo_final, 2); // Mostrar el resultado con dos decimales
}

