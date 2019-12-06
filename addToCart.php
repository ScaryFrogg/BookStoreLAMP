<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

$success=false;
//provera da li je korisnik ulogovan
if(isset($_SESSION["korisnik_id"])){
    $korisnikId=$_SESSION["korisnik_id"];
    $knjigaId=$_POST["id"];

    $sql_dodaj="INSERT INTO `korpe`(`knjiga_id`, `korisnik_id`, `kolicina`) VALUES ($knjigaId,$korisnikId,1)";
    $sql_provera="SELECT `knjiga_id`, `korisnik_id` FROM `korpe` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
    $provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));
    mysqli_query($db,$sql_dodaj);

    $success =true;
}
$return=array(
    "success"=>$success
);
echo json_encode($return);
exit;

