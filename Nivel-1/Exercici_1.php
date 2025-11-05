<h3 style="color:darkgreen;">Exercici 1 </h3>

<?php
$evenNumbers = ['2', '4', '6', '8', '10', '12'];

foreach ($evenNumbers as $numbers):?>

   <p><?= "$numbers";?></p>

<?php endforeach; ?>


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



<h3 style="color: darkgreen;">Exercici 3</h3>

<?php
function IsCharacter ($words, $char) {
  foreach ($words as $word) {
    if (!str_contains(strtolower($word), strtolower($char)))
    {
        return false;
    }
  }
  return true;
}
$words = ['hola', 'bonjour', 'Hi'];
var_dump(IsCharacter($words, "i"));
var_dump(IsCharacter($words, "l"));
?>

<h3 style="color: darkgreen;">Exercici 4</h3>

<?php 
  $AboutMe = array("Name"=>"Inbisat", "age"=>22, "Email"=>"inbi.nav.02@gmail.com",
  "FavFood"=>"Fruits");
  print_r($AboutMe);

?>