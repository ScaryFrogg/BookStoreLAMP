<?php
session_start();
//connecto to db
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

$success=false;
//Check if user is logged in
if(isset($_SESSION["korisnik_id"])){
    $userId=$_SESSION["korisnik_id"];
    $bookId=$_POST["id"];

    $sql_add="INSERT INTO `korpe`(`knjiga_id`, `korisnik_id`, `kolicina`) VALUES ($bookId,$userId,1)";
    $sql_check="SELECT `knjiga_id`, `korisnik_id` FROM `korpe` WHERE knjiga_id=$bookId AND korisnik_id=$userId";
    $provera=mysqli_fetch_assoc(mysqli_query($db,$sql_check));
    mysqli_query($db,$sql_add);

    $success =true;
}
$return=array(
    "success"=>$success
);
echo json_encode($return);
exit;

