<?php

  $primeNumbers = [1,2,3,4,5];

  $provjera = isset($primeNumbers[2]);
  if ($provjera == true){
    var_dump($primeNumbers[2]);
  } else {
    var_dump("Ne postoji treći element niza");
  }
  
  $primeNumbers[] = 6;

  $broj = count($primeNumbers);

  var_dump($broj);

  var_dump ($primeNumbers);

  rsort($primeNumbers);

  var_dump($primeNumbers);

?>