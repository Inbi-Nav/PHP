<h3 style="color: darkgreen;">Exercici 1 Nivel 3</h3>
<?php
function cube ($n) {
    return $n *$n *$n;
}

$Numbers = [1, 2, 3, 4, 5];
$b = array_map('cube', $Numbers);
echo "<pre>";
print_r($b);
?>

<h3 style="color: darkgreen;">Exercici 2 Nivel 3</h3>
<?php

function Ispar($string) {
    return strlen($string) % 2 == 0;
}

$Fruits = ["Apple", "Banana", "Orange", "kiwi"];

$resultado = array_filter($Fruits, 'Ispar');

print_r($resultado);
?>

<h3 style="color: darkgreen;">Exercici 3 Nivel 3</h3><?php

function esPrimo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$callback = function ($counter, $item) {
    if (esPrimo($item)) {
        $counter += $item;
    }
    return $counter;
};

$numeros = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$sumaPrimos = array_reduce($numeros, $callback, 0);

echo  $sumaPrimos; 

?>
