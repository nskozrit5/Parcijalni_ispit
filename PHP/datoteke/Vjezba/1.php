<?php

$polazniciJson = file_get_contents('polaznici.json'); //čitanje sadržaja json-a
$polaznici = json_decode($polazniciJson, true); //stavljanje u niz

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
foreach ($polaznici as $polaznik) {
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
    "telefon" => 3859423423423,
];
$polazniciJson = json_encode($polaznici); //transformiranje u JSON
file_put_contents('polaznici.json', $polazniciJson); //zapisivanje u polaznici.json
?>
