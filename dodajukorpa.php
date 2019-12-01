<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

//provera da li je korisnik ulogovan
if(isset($_SESSION["korisnik_id"])){
    $korisnikId=$_SESSION["korisnik_id"];
    $knjigaId=$_POST["id"];

$sql_dodaj="INSERT INTO `korpe`(`knjiga_id`, `korisnik_id`, `kolicina`) VALUES ($knjigaId,$korisnikId,1)";
$sql_provera="SELECT `knjiga_id`, `korisnik_id` FROM `korpe` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
$provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));
echo $knjigaId;
    mysqli_query($db,$sql_dodaj);
    echo "Knjiga dodata u korpu";
}
else{
    echo "Morate biti ulogovani kako bi dodali knjigu u listu zelja";
}

