<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

//provera da li je korisnik ulogovan
if(isset($_SESSION["korisnik_id"])){
    $korisnikId=$_SESSION["korisnik_id"];
$knjigaId=$_POST["id"];

$sql_provera="SELECT `knjiga_id`, `korisnik_id` FROM `korpe` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
$sql_ukloni="DELETE FROM `korpe` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
$provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));
echo $knjigaId;
if($provera>0){
    mysqli_query($db,$sql_ukloni);
    echo "Knjiga uklonjena iz Korpe";
}else{
    echo "Knjiga nije u korpi";
}
}
else{
    echo "Morate biti ulogovani kako bi dodali knjigu u listu zelja";
}
?>