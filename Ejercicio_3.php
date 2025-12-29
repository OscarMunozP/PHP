<?php

$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// 1. Convertir el texto a minúsculas
$textoMinusculas = strtolower($texto);
echo "Texto en minúsculas:<br>$textoMinusculas<br><br>";

// 2. Contar cuántas palabras tiene
$palabras = explode(" ", $texto); 
$totalPalabras = count($palabras); 
echo "El texto tiene $totalPalabras palabras.<br><br>";

// 3. Contar cuántas veces aparece cada palabra
$palabras = explode(" ", $texto); 
$frecuencias = array_count_values($palabras);  
foreach ($frecuencias as $palabra => $cantidad) { 
    echo "$palabra aparece $cantidad veces<br>"; 
}

// 4. Mostrar solo las palabras repetidas
echo "Palabras repetidas:<br>";
$hayRepetidas = false;

foreach ($frecuencias as $palabra => $cantidad) {
    if ($cantidad > 1) {
        echo "$palabra aparece $cantidad veces<br>";
        $hayRepetidas = true;
    }
}

if (!$hayRepetidas) {
    echo "No hay palabras repetidas<br>";
}

// 5. Mostrar la palabra más repetida
$masRepetida = "";
$max = 0;

foreach ($frecuencias as $palabra => $cantidad) {
    if ($cantidad > $max) {
        $max = $cantidad;
        $masRepetida = $palabra;
    }
}

echo "<br>La palabra más repetida es: $masRepetida ($max veces)<br><br>";
 
// 6. Ignora palabras de menos de 3 letras.
$palabras = explode(" ", $texto); 

$palabrasFiltradas = []; foreach ($palabras as $p) { 
    if (mb_strlen($p, "UTF-8") >= 3) { 
        $palabrasFiltradas[] = $p; 
    } 
} 
echo "Palabras con 3 letras o más:<br>"; foreach ($palabrasFiltradas as $palabra) { 
    echo "$palabra<br>"; 
}
?>
