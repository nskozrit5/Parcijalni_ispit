<?php

  //$a = 10;
  //$b = $a;
  //echo $a;

  $a = 10;
  $b = &$a; //referenca
  $b = 4;
  //unset($a); //briše varijablu
  echo $a, "\n" ;
  echo $b;
?>