<?php

function mojaFunkcija($name, $surname){
  $spojeno = $name . " " . $surname;
  return strtoupper($spojeno);
}

$rezultat = mojaFunkcija("Nino", "Skozrit");

echo $rezultat;