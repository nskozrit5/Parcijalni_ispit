<?php

  $a = 3;
  $b = 5;
  $c = "jedan";
  $d = "dva";

  $zbroj = $a + $b;
  $razlika = $a - $b;
  $umnozak = $a * $b;
  $kvocijent = $a / $b;
  $modulo = $a % $b;

  echo "$zbroj $razlika $umnozak $kvocijent $modulo <br>";

  $f = $c . $d;
  echo "$f <br>";

  $a += 3;
  $b -=2;

  echo "$a $b <br>";

  var_dump($a > $b);
  echo "<br>";

  $a++;
  echo "$a <br>";

  $b++;
  echo $b;
  

?>