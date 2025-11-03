<h3 style="color: darkgreen;"> Exercici 1 Nivel 2 </h3>

<h3 style="color: darkblue;"> La lista de invitados en común entre ambas listas. </h3>

<?php
$Array1 = ['Maria', 'Feran', 'Ana', 'Juan', 'Miguel', 'Beatriz'];
$Array2 = ['Juliana', 'Josep', 'Juan', 'Maria', 'Miguel', 'Maria'];

$resultado= array_intersect($Array1, $Array2);
print_r($resultado);
?>
<br>
<br>

<h3 style="color: darkblue;"> La mezcla de la lista de invitados (sin repeticiones). </h3>
<?php
$Array1 = ['Maria', 'Feran', 'Ana', 'Juan', 'Miguel', 'Beatriz'];
$Array2 = ['Juliana', 'Josep', 'Juan', 'Maria', 'Miguel', 'Maria'];

$ArrayCombinado = array_merge($Array1, $Array2);
$ArraySinDuplicado =array_unique(($ArrayCombinado));

echo "<pre>";
print_r($ArraySinDuplicado);
?>

<br>
<br>

<h3 style="color: darkblue;"> La lista de invitados exclusivos de la primera lista. </h3>
<?php
$Array1 = ['Maria', 'Feran', 'Ana', 'Juan', 'Miguel', 'Beatriz'];
$Array2 = ['Juliana', 'Josep', 'Juan', 'Maria', 'Miguel', 'Maria'];

$PrimeraLista = array_diff($Array1, $Array2);

print_r($PrimeraLista);
?>

<br>
<br>

<h3 style="color: darkblue;"> La lista de invitados exclusivos de la segunda lista. </h3>
<?php
$Array1 = ['Maria', 'Feran', 'Ana', 'Juan', 'Miguel', 'Beatriz'];
$Array2 = ['Juliana', 'Josep', 'Juan', 'Maria', 'Miguel', 'Maria'];

$SegundaLista = array_diff($Array2, $Array1);

print_r($SegundaLista);

?>

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
