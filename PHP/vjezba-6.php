<?php

$i = 1;
while($i <= 10){
  echo "$i <br>";
  $i++;
}

for($j = 1; $j <= 100; $j++){
  if($j %2 == 0){
    echo "$j <br>";
  }
}

for ($j=2; $j <= 100 ; $j+=2) { 
  echo $j, "\n";
}
?>