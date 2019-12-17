<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

//provera da li je korisnik ulogovan
if(isset($_SESSION["user_id"])){
    $korisnikId=$_SESSION["user_id"];
$booksId=$_POST["id"];

$sql_provera="SELECT `book_id`, `user_id` FROM `shopping_carts` WHERE book_id=$booksId AND user_id=$korisnikId";
$sql_ukloni="DELETE FROM `shopping_carts` WHERE book_id=$booksId AND user_id=$korisnikId";
$provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));

if($provera>0){
    mysqli_query($db,$sql_ukloni);
    echo true;
}else{
    echo false;
}
}
else{
    echo false;
}
?>