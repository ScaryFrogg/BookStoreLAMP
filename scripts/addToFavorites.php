<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Failed to connect to database");

$logged=false;
$success=false;
//provera da li je korisnik ulogovan
if(isset($_SESSION["korisnik_id"])){
    $logged=true;
    $korisnikId=$_SESSION["korisnik_id"];
    $knjigaId=$_POST["id"];

    $sql_dodaj="INSERT INTO `liste_zelja`(`knjiga_id`, `korisnik_id`, `kolicina`) VALUES ($knjigaId,$korisnikId,1)";
    $sql_provera="SELECT `knjiga_id`, `korisnik_id` FROM `liste_zelja` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
    $sql_ukloni="DELETE FROM `liste_zelja` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
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


