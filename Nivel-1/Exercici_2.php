
<h3 style="color: darkgreen;">Exercici 1 </h3>

<?php
$evenNumbers = ['2', '4', '6', '8', '10', '12'];

foreach ($evenNumbers as $numbers):?>

   <p><?= "$numbers";?></p>

<?php endforeach; ?>

<?php print_r("\n"); ?>

<h3 style="color: darkgreen;">Exercici 2</h3>

<?php

$animals = ["elephant", "Lion", "Tiger", "Giraffe", "Monkey", "Hippopotamus"];

$count = count($animals);
?>

<strong><?= "Hay $count en total";?></strong>


<?php
$animals = ["elephant", "Lion", "Tiger", "Giraffe", "Monkey", "Hippopotamus"];

// eliminar item de array 
$lastItem = array_pop($animals);

// comprobar los indices
print_r($animals);

$count = count($animals);
?>

