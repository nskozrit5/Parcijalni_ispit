<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parcijalni ispit</title>
  <style>
    div{
      display:flex;
      justify-content: space-around;
    }
    table, th, td{
      border: 1px solid black;
      padding: 2px;
    }
    #poruka{
      font-size: large;
      display: flex;
      justify-content:left;
      padding-left: 5%;
      padding-top: 5%;
    }
  </style>
</head>
<body>
  <div>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <input type="text" placeholder="Unesi riječ" name="rijec">
      <br>
      <input type="submit" value="Pošalji" name="unos">
      <br>
    </form>
<br>
<?php
/*----------------ispis json------------------*/
$rijeciJson = file_get_contents('words.json'); //čitanje sadržaja json-a
$rijeci = json_decode($rijeciJson, true); //stavljanje u niz

$i = 0;
echo "<table>
        <tr>
          <th>Riječ</th>
          <th>Broj slova</th>
          <th>Broj suglasnika</th>
          <th>Broj samoglasnika</th>
        </tr>
";
if (!empty($rijeci)) {
    foreach ($rijeci as $rijec) {
        echo "<tr>";
        echo "<td>" . $rijeci[$i]['rijec'] . "</td>";
        echo "<td>" . $rijeci[$i]['brojSlova'] . "</td>";
        echo "<td>" . $rijeci[$i]['brojSuglasnika'] . "</td>";
        echo "<td>" . $rijeci[$i]['brojSamoglasnika'] . "</td>";
        echo "</tr>";
        $i++;
    }
} else {
    $ispis = "Nijedna riječ nije unesena!";
}
echo "</table>";
/*----------------ispis json------------------*/
?>
  </div>
  <div id="poruka">
<?php
if (!empty($ispis)) {
    echo $ispis;
}
?>
  </div>
</body>
</html>

<?php
/*----------------funkcije------------------*/
function samoglasnici()
{
    global $niz;
    $samoglasnici = ['a', 'e', 'i', 'o', 'u'];
    $broj_samoglasnika = 0;
    foreach ($niz as $slovo) {
        for ($i = 0; $i < 5; $i++) {
            if ($slovo == $samoglasnici[$i]) {
                $broj_samoglasnika++;
            }
        }
    }
    return $broj_samoglasnika;
}

function suglasnici($broj_samoglasnika)
{
    global $broj_slova;
    $broj_suglasnika = $broj_slova - $broj_samoglasnika;
    return $broj_suglasnika;
}
/*----------------funkcije------------------*/

if (isset($_GET['unos'])) {
    $rijec = $_GET['rijec'];
    if (!empty($rijec)) {
      if (preg_match('/^\pL+$/u', $rijec)) {
        $rijec = strtolower($rijec); //mala slova
        $broj_slova = mb_strlen($rijec, 'UTF-8'); //broj slova
        $niz = str_split($rijec); //prebacivanje u niz

        /*----------------unosjson------------------*/
        $rijeci[] = [
            "rijec" => $rijec,
            "brojSlova" => $broj_slova,
            "brojSamoglasnika" => samoglasnici(),
            "brojSuglasnika" => suglasnici(samoglasnici()),
        ];
        $rijeciJson = json_encode($rijeci); //transformiranje u JSON
        file_put_contents('words.json', $rijeciJson); //zapisivanje u words.json
        /*----------------unosjson------------------*/

        header("Location: index.php"); //reload
      } else {
        echo "<div id='poruka'>Morate unijeti samo slova!</div>";
      }
    } else {
        echo "<div id='poruka'>Niste unijeli riječ!</div>";
    }
}
?>
