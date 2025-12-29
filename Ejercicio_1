<?php

$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

function calcularPromedio($notas) {
    $suma = array_sum($notas);
    $cantidad = count($notas);
    $promedio = $suma / $cantidad;
    return $promedio;
}

$aprobados = 0;
$suspensos = 0;
$mejorEstudiante = "";
$mejorPromedio = -1;

foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);

    echo "Estudiante: $nombre<br>";
    echo "Promedio: $promedio<br>";

    if ($promedio >= 6) {
        echo "Estado: Aprobado<br><br>";
        $aprobados++;
    } else {
        echo "Estado: Suspenso<br><br>";
        $suspensos++;
    }

    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}

echo "<hr>";
echo "Total aprobados: $aprobados<br>";
echo "Total suspensos: $suspensos<br>";
echo "Mejor estudiante: $mejorEstudiante con un promedio de $mejorPromedio<br>";

?>
