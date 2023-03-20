<?php
  $a = 5;

  //echo $a, "\n"; //nova linija

  function foo(){
    return 5;
  }

  $a = foo();
  $b = $a;

  echo $a, "\n";
?>