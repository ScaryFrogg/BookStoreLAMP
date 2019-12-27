<?php
include_once "functions.php";
//variable
$email="";

//connection to db

$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database");

//registracija usera
$email = mysqli_real_escape_string($db, $_POST["email"]);
$pw1 = mysqli_real_escape_string($db, $_POST["pw1"]);
$pw2 = mysqli_real_escape_string($db, $_POST["pw2"]);

//provera da li email vec postoji
$email_provera_query="SELECT * FROM users WHERE email ='$email' LIMIT 1";
$results =mysqli_query($db,$email_provera_query);
$user = mysqli_fetch_assoc($results);
if($user){
    if($user["email"]===$email){
        echo "There is already user using that email address";
    }else{
    // Registracija usera 
    $password=md5($pw1);
    $name=$_POST["name"];
    $last_name=$_POST["last_name"];
    $dodavanje_usera_query="INSERT INTO users (email , password , name , last_name) VALUES ('$email','$password','$name','$last_name');";
    mysqli_query($db,$dodavanje_usera_query);
    $_SESSION["email"]=$email;
    $_SESSION["success"]="You are logged in";
    //echo "<br> $dodavanje_usera_query";
    header("Location: ../index.php");   
    }
}

