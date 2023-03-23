<?php


$uploadDir = 'C:/xampp/htdocs/Algebra-zadaci/PHP/GET_POST/FILES/uploads/';
$uploadFile = $uploadDir . "/" . $_FILES['datoteka']['name'];

if(move_uploaded_file($_FILES['datoteka']['tmp_name'],$uploadFile)){
  echo "Datoteka uspješno postavljena!";
} else {
  echo "Datoteka nije postavljena!";
}


/*
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["datoteka"]["name"]);

if (move_uploaded_file($_FILES["datoteka"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["datoteka"]["name"])). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
  $temp_name = $_FILES['file']['tmp_name'];
  $name = $_FILES['file']['name'];
  move_uploaded_file($temp_name, "uploads/$name");
  echo "File uploaded successfully.";
} else {
  echo "Error uploading file.";
}
*/
