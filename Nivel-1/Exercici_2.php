<h3 style="color: darkgreen;">Exercici 2</h3>

<?php
$animals = ["elephant", "Lion", "Tiger", "Giraffe", "Monkey", "Hippopotamus"];

$count = count($animals);
?>
<strong><?= "Hay $count en total";?></strong>

<br>
<br>

<?php
$animals = ["elephant", "Lion", "Tiger", "Giraffe", "Monkey", "Hippopotamus"];

// eliminar item de array 
$lastItem = array_pop($animals);

// comprobar los indices
print_r($animals);
?>

<br>
<br>

<?php 

$animals = array_values($animals);
print_r($animals);

?>

