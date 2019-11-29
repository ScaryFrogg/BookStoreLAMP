<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

$korisnikId=$_SESSION["korisnik_id"];
$knjigaId=$_POST["id"];

$sql_dodaj="INSERT INTO `liste_zelja`(`knjiga_id`, `korisnik_id`, `kolicina`) VALUES ($knjigaId,$korisnikId,1)";
$sql_provera="SELECT `knjiga_id`, `korisnik_id` FROM `liste_zelja` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
$sql_ukloni="DELETE FROM `liste_zelja` WHERE knjiga_id=$knjigaId AND korisnik_id=$korisnikId";
$provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));
echo $knjigaId;
if($provera>0){
    mysqli_query($db,$sql_ukloni);
    echo "Knjiga uklonjena iz liste zelja";
}else {
    mysqli_query($db,$sql_dodaj);
    echo "Knjiga dodata u listu zelja";
}
