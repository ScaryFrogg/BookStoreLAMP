<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

$logged=false;
$success=false;
//provera da li je korisnik ulogovan
if(isset($_SESSION["user_id"])){
    $logged=true;
    $korisnikId=$_SESSION["user_id"];
    $booksId=$_POST["id"];

    $sql_dodaj="INSERT INTO `favorites`(`book_id`, `user_id`) VALUES ($booksId,$korisnikId)";
    $sql_provera="SELECT `book_id`, `user_id` FROM `favorites` WHERE `book_id`=$booksId AND `user_id`=$korisnikId";
    $sql_ukloni="DELETE FROM `favorites` WHERE `book_id`=$booksId AND `user_id`=$korisnikId";
    $provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));

    if($provera>0){
        mysqli_query($db,$sql_ukloni);
    }else {
        mysqli_query($db,$sql_dodaj);
        $success=true;
    }
}
$return=array(
    "logged"=>$logged,
    "success"=>$success
);
echo json_encode($return);
exit;


