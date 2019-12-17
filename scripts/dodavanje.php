<?php
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

header('Content-Type: application/json');

if($_FILES['file']['name']){
  $nameKnjige =strtolower (str_replace(' ', '_',$_POST['title']."-".$_POST['author'].$_FILES['file']['extension']));
  $putDoSlike = "img/knjige/".$nameKnjige;
  if (move_uploaded_file($_FILES["file"]["tmp_name"], "../img/knjige/".$nameKnjige)) {
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
  }
  $nova_books_query = 'INSERT INTO `books`(`title` , `author`, `categories`, `about`, `img_src`) VALUES ("'.$_POST["title"].'","'.$_POST["author"].'","'.$_POST["categories"].'","'.$_POST["about"].'","'.$putDoSlike.'");';
  mysqli_query($db,$nova_books_query);
  
}