<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vježba</title>
</head>
<body>
<?php

$polazniciJson = file_get_contents('polaznici.json');
//$books = json_decode($bookJson); //vraća niz objekata
//echo $bookJson;
//var_dump($books);
//var_dump($books[0]);

$polaznici = json_decode($polazniciJson, true); //vraća niz nizova
//var_dump($books[0]['author']);

$i = 0;
echo "<table border=1>
        <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
        </tr>
";
foreach($polaznici as $polaznik){
  echo "<tr>";
  echo "<td>" . $polaznici[$i]['ime'] . "</td>";
  echo "<td>" . $polaznici[$i]['prezime'] . "</td>";
  echo "<td>" . $polaznici[$i]['godine'] . "</td>";
  echo "<td>" . $polaznici[$i]['email'] . "</td>";
  echo "<td>" . $polaznici[$i]['telefon'] . "</td>";
  echo "</tr>";
  $i++;
}
echo "</table>";

$polaznici[] = [
  "ime" => "Nino",
  "prezime" => "Skozrit",
  "godine" => 25,
  "email" => "nino.skozrit@gmail.com",
  "telefon" => 3859423423423
];

$polazniciJson = json_encode($polaznici);
file_put_contents('polaznici.json', $polazniciJson);


?>
</body>
</html>