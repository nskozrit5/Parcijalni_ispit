<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parcijalni ispit</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" placeholder="Unesi riječ" name="rijec">
    <input type="submit" value="Provjeri" name="unos">
  </form> 
</body>
</html>


<?php
/*----------------funkcije------------------*/
function samoglasnici(){
  global $rijec;
  global $niz;
  global $broj_slova;
  $samoglasnici = ['a','e','i','o','u'];
  $broj_samoglasnika = 0;
  foreach ($niz as $slovo) {
      for ($i = 0; $i < 5; $i++) {
          if ($slovo == $samoglasnici[$i]) {
              $broj_samoglasnika++;
          }
      }
  }
  $broj_suglasnika = $broj_slova - $broj_samoglasnika;
  echo $broj_samoglasnika;
}

function suglasnici(){
  global $broj_slova;
  global $broj_samoglasnika;
  $broj_suglasnika = $broj_slova - $broj_samoglasnika;
  echo $broj_suglasnika;
}
/*----------------funkcije------------------*/

if (isset($_GET['unos'])) {
  $rijec = $_GET['rijec'];
  if(!empty($rijec)){
    $rijec = strtolower($rijec); //mala slova
    $broj_slova = strlen($rijec); //broj slova
    echo "$broj_slova <br>";
    $niz = str_split($rijec); //prebacivanje u niz
    samoglasnici(); //poziv funkcije
    suglasnici(); //poziv funkcije
  } else {
    echo "Niste unijeli riječ!";
  }
}

?>
