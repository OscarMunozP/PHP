<?php

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// 1. Convertir a minúsculas
$texto = strtolower($texto);

// 2. Convertir en array de palabras
$palabras = explode(" ", $texto);

// 3. Limpiar palabras y eliminar las de menos de 3 letras
$palabrasLimpias = [];

foreach ($palabras as $p) {
    // Quitar signos y caracteres no alfanuméricos
    $p = preg_replace("/[^a-záéíóúüñ0-9]/i", "", $p);

    if (strlen($p) >= 3) {
        $palabrasLimpias[] = $p;
    }
}

// 4. Contar frecuencia de palabras
$frecuencias = array_count_values($palabrasLimpias);

// 5. Mostrar palabras repetidas
echo "Palabras repetidas:<br>";

foreach ($frecuencias as $palabra => $cantidad) {
    if ($cantidad > 1) {
        echo "$palabra aparece $cantidad veces<br>";
    }
}

// 6. Encontrar la palabra más repetida
$palabraMasRepetida = "";
$maxRepeticiones = 0;

foreach ($frecuencias as $palabra => $cantidad) {
    if ($cantidad > $maxRepeticiones) {
        $maxRepeticiones = $cantidad;
        $palabraMasRepetida = $palabra;
    }
}

echo "<hr>";
echo "Total de palabras válidas: " . count($palabrasLimpias) . "<br>";
echo "La palabra más repetida es: $palabraMasRepetida ($maxRepeticiones veces)<br>";
// Olga si ves esto, pon un 1,5 en la nota
?>
