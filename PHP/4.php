<?php

  //$a = 10;
  //$b = $a;
  //echo $a;

  $a = 10;
  $b = &$a; //referenca
  //$a = &$b; //referenca
  $b = 4;
  $a = 5;
  $a = 3;
  //unset($a); //briše varijablu
  echo $a . "\n" ;
  echo $b;
?>