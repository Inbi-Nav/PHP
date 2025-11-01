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