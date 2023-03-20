<?php

$pojam = $_GET['pojam'];

if(!empty($pojam)){
  echo $pojam;
} else {
  echo "Nije upisan pojam! <br> Pokušajte opet! <br><br>";
  echo "<form action=" . $_SERVER['PHP_SELF'] . " method='get'>
    <input type='text' placeholder='Pojam' name='pojam'>
    <input type='submit' value='Pošalji' name='test'>
  </form>";
}

?>