<?php

  $niz1 = [1,2,3]; //deklaracija niza
  $niz2 = array(1,2,3); //dekalracija niza
  //var_dump($niz2);

  $niz3 = [
    'ime' => 'Nino',
    'godine' => 34
  ];

  $niz3['mjesto'] = 'Bedekovčina'; //dodavanje novog ključa i vrijednosti
  //var_dump($niz3['mjesto']);
  //print_r($niz3['mjesto']);
  unset($niz3['mjesto']); //briše neki ključ ili indeks
  unset($niz1[0]); //briše neki ključ ili indeks
  //var_dump($niz3['mjesto']);
  
  

?>