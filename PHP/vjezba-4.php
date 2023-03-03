<?php

  $users = [
    [
      'ime' => 'Marko',
      'prezime' => 'Markić',
      'godine' => '23',
      'spol' => 'm'
    ],
    [
      'ime' => 'Ivo',
      'prezime' => 'Ivić',
      'godine' => '26',
      'spol' => 'm'
    ]
  ];

  //var_dump($users);

  unset($users[1]['spol'], $users[0]['spol']);
  //unset($users[1]['spol']);

  //var_dump($users);

  /*
  $users[] = [
    'ime' => 'Netko',
    'prezime' => 'Netkić',
    'godine' => '29'
  ];
  */

  $users[] = ['netko', 'netkić', 25];

  var_dump($users);

?>