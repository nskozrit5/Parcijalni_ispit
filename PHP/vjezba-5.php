<?php

  $a = 5;
  $b = 10;
  $c = 15;

  if ((($b > $a) & ($b < $c)) || (($b < $a) & ($b > $c))){
    print_r("b je između \n");
  } else {
    print_r("b nije između \n");
  }  

?>