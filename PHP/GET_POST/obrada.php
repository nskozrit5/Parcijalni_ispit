<?php

$ime = $_GET['Ime'];
$prezime = $_GET['Prezime'];

/*
if(empty($ime) && empty($prezime)){
  echo "Nije upisano ime ni prezime!";
} else if(empty($prezime)){
          echo "Nije upisano prezime!";
        } else {
          echo "Nije upisano ime!";
        }
*/
if(!empty($ime) && !empty($prezime)){
  echo "$ime $prezime";
} else if(empty($ime)){
  if(empty($prezime)){
    echo "Nije upisano ime ni prezime!";
  } else {
    echo "Nije upisano ime!";
  } 
} else {
  echo "Nije upisano prezime!";
}
?>