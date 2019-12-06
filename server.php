<?php
include_once "funkcije.php";
//variable
$email="";

$errors=array();
//konekcija na bazu

$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

//registracija korisnika
$email = mysqli_real_escape_string($db, $_POST["email"]);
$sifra1 = mysqli_real_escape_string($db, $_POST["sifra1"]);
$sifra2 = mysqli_real_escape_string($db, $_POST["sifra2"]);

//form validation
if(empty($email)){array_push($errors,"Email je obavezan");}
if(empty($sifra1)){array_push($errors,"Sifra je obavezna");}
if($sifra1!=$sifra2){array_push($errors,"Sifre moraju da se poklapaju");}

//provera da li email vec postoji
$email_provera_query="SELECT * FROM korisnici WHERE email ='$email' LIMIT 1";
$results =mysqli_query($db,$email_provera_query);
$korisnik = mysqli_fetch_assoc($results);
if($korisnik){
    if($korisnik["email"]===$email){array_push($errors,"Postoji korisnik vec registrovan sa tom email adresom");}
}else{
    // Registracija korisnika 
    $password=md5($sifra1);
    $ime=$_POST["ime"];
    $prezime=$_POST["prezime"];
    $dodavanje_korisnika_query="INSERT INTO korisnici (email , password , ime , prezime) VALUES ('$email','$password','$ime','$prezime');";
    mysqli_query($db,$dodavanje_korisnika_query);
    $_SESSION["email"]=$email;
    $_SESSION["success"]="You are logged in";
    //echo "<br> $dodavanje_korisnika_query";
    header("Location: index.php");   

}//kraj registracije


