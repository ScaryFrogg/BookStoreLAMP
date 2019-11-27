<?php
header('Content-Type: application/json');

if($_FILES['file']['name']){
      $putDoSlike = "img/".basename($_FILES["file"]["name"]);
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $putDoSlike)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
  }
}
