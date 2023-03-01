<?php

  $a = 10;
  $b = $a;
  echo $a;

  $a = 10;
  $b = &$a; //referenca
  $a = 5;
  echo $a;

?>