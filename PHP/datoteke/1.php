<?php

$bookJson = file_get_contents('knjige.json');
//$books = json_decode($bookJson); //vraća niz objekata
//echo $bookJson;
//var_dump($books);
//var_dump($books[0]);

$books = json_decode($bookJson, true); //vraća niz nizova
//var_dump($books[0]['author']);


foreach($books as $book){
  if($book['pages'] > 500){
    echo "duga knjiga";
  }
}


$books[] = [
  "title" => "Laws of human nature",
  "author" => "Robert Greene",
  "pages" => 250,
  "available" => false
];

$booksJson = json_encode($books);
file_put_contents('knjige.json', $booksJson);
file_put_contents('foo.json', $booksJson);

//var_dump($booksJson);




?>