<?php

$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konekcija sa bazom");

header('Content-Type: application/json');

if($_FILES['file']['name']){
  $nameKnjige =strtolower(str_replace(' ', '_',($_POST['title']."-".$_POST['author'])));
  $putDoSlike = "img/knjige/".$nameKnjige;
  if (move_uploaded_file($_FILES["file"]["tmp_name"], "../img/knjige/".$nameKnjige)) {

    echo "Book ".$_POST["title"]." ".$_POST["author"]." added";
  
  }
  $nova_books_query = 'INSERT INTO `books`(`title` , `author`, `categories`, `about`, `img_src`, `price`, `format`, `pages`, `relese`, `discount`) VALUES ("'.$_POST["title"].'","'.$_POST["author"].'","'.$_POST["categories"].'","'.$_POST["about"].'","'.$putDoSlike.'","'.$_POST["price"].'","'.$_POST["format"].'","'.$_POST["pages"].'","'.$_POST["relese"].'","'.$_POST["discount"].'");';
  mysqli_query($db,$nova_books_query);
}