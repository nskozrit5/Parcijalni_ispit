<?php

  $cijeli_broj = 3;
  $realni_broj = 3.12;
  $string = "tekst";
  $logicka = true;

  echo $cijeli_broj, "\n";
  echo $realni_broj, "\n";
  echo $string, "\n";
  echo $logicka, "\n";

  //define ('PI', 3.14);
  const PI = 3.14;
  
  $a = 5;
  //$b = &$a;
  echo $b, "\n";
  $a = 10;
  echo $b, "\n";
  echo gettype($b);

?>