<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

header('Content-Type: application/json');

if($_FILES['file']['name']){
  $imeKnjige =strtolower (str_replace(' ', '_',$_POST['naslov']."-".$_POST['autor'].$_FILES['file']['extension']));
  $putDoSlike = "img/knjige/".$imeKnjige;
  if (move_uploaded_file($_FILES["file"]["tmp_name"], "../img/knjige/".$imeKnjige)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
  }
  $nova_knjiga_query = 'INSERT INTO `knjiga`(`naslov` , `autor`, `kategorija`, `opis`, `slika`) VALUES ("'.$_POST["naslov"].'","'.$_POST["autor"].'","'.$_POST["kategorija"].'","'.$_POST["opis"].'","'.$putDoSlike.'");';
  mysqli_query($db,$nova_knjiga_query);
  
}