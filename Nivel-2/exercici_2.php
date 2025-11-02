<h3 style="color: darkgreen;">Exercici 2 Nivel 2</h3>

<?php 
$ClaseB = [
    "Felipe" => [6, 4, 7, 6, 5],
    "Ana"    => [7, 5, 5, 6, 8],
    "Alex"   => [2, 0, 5, 4, 5]
];

// Media de cada alumno 
function notaMedia ($ClaseB) {
    $notaMedia = [];

    foreach($ClaseB as $nombre => $notas) {
        $sumaNota = array_sum($notas);
        $count = count($notas);
        $media = $sumaNota / $count;
        $notaMedia[$nombre] = $media;
    }

    return $notaMedia;
}

$resultado = notaMedia($ClaseB);

foreach ($resultado as $nombre => $media) {
    echo "$nombre tiene una nota media de $media<br>";
}

// Media general 
$sum = array_sum($resultado);
$countResultado = count($resultado);
print_r($sum / $countResultado); 
?>
