<?php

function foo($number){
  static $varijabla = 0;
  $varijabla += $number;
  echo "$varijabla\n";
} 

$funkcija = 'foo';
$number = rand(1,10);
for($brojac = 1; $brojac <= 5; $brojac++){
  $funkcija($number);
}

?>