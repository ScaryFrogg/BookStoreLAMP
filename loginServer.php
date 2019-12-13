<?php
session_start();
//provera da li je korisnik vec ulogovan
if (isset($_SESSION["email"])){
    header("Location: index.php");
}else{
    //Connect to db
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Failed to connect to database");
    
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    //hash
    $password=md5($password);

    //Check if user exists
    $email_provera_query="SELECT * FROM korisnici WHERE email ='$email' AND password='$password' LIMIT 1";
    $results =mysqli_query($db,$email_provera_query);
    $korisnik = mysqli_fetch_assoc($results);
    if($korisnik){
        $id =$korisnik["korisnik_id"];
        $_SESSION["korisnik_id"]=$id;
        $_SESSION["email"]=$email;
        $_SESSION["admin"]=$korisnik["administrator"];

        header("Location: index.php");
    }else{
        echo "Wrong email and password combination";
    }
}