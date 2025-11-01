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