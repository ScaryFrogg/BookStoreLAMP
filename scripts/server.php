<?php
include_once "functions.php";
//variable
$email="";

//registracija usera
$email = mysqli_real_escape_string($db, $_POST["email"]);
$pw1 = mysqli_real_escape_string($db, $_POST["pw1"]);
$pw2 = mysqli_real_escape_string($db, $_POST["pw2"]);
if($pw1!==$pw2){
    $_SESSION['message'] = "Passwords do not match";
    header("Location: ../register.php");
    die;
}

//provera da li email vec postoji
$email_provera_query="SELECT * FROM users WHERE email ='$email' LIMIT 1";
$results =mysqli_query($db,$email_provera_query);
$user = mysqli_fetch_assoc($results);
if($user){
    if($user["email"]===$email){
        $_SESSION['message'] = "There is already user using this email address";
        header("Location: ../register.php");
        die;
    }
}else{
    // Registracija usera 
    $password=md5($pw1);
    $name=$_POST["name"];
    $last_name=$_POST["last_name"];
    $subscribed =$_POST["newsletter"]=="on";
    $dodavanje_usera_query="INSERT INTO users (email , password , first_name , last_name , subscribed) VALUES ('$email','$password','$name','$last_name',$subscribed);";
    mysqli_query($db,$dodavanje_usera_query);
    $idresult = mysqli_fetch_assoc(mysqli_query($db,"SELECT `id` FROM users WHERE email ='$email' LIMIT 1"));
    $_SESSION["email"]=$email;
    $_SESSION["user_id"]=$idresult["id"];
    $_SESSION["admin"]=0;
    $_SESSION["first_name"]=$name;
    $_SESSION['message'] ="Welcome ".$name;
    header("Location: ../index.php");   
}

