<?php
session_start();
//provera da li je korisnik vec ulogovan
if (isset($_SESSION["email"])){
    header("Location: index.php");
}else{
    //Konekcija na bazu
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

    //varijable
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $sifra = mysqli_real_escape_string($db, $_POST["sifra"]);

    //Validacija forme
    if(empty($email)){array_push($errors,"Email je obavezan");}
    if(empty($sifra)){array_push($errors,"Sifra je obavezna");}

    //hash
    $password=md5($sifra);

    //Provera da li korisnik postoji
    $email_provera_query="SELECT * FROM korisnici WHERE email ='$email' AND password='$password' LIMIT 1";
    $results =mysqli_query($db,$email_provera_query);
    $korisnik = mysqli_fetch_assoc($results);
    if($korisnik){
        $_SESSION["email"]=$email;
        $_SESSION["administrator"]=$korisnik["administrator"];
        header("Location: index.php");
    }else{
        echo "Pogresan email ili sifra";
    }
}