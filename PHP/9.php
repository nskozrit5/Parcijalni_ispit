<?php

function foo(){
  static $a = 0; //statička varijabla
  echo $a, "\n";
  $a++;
}



foo();
foo();
foo();

?>