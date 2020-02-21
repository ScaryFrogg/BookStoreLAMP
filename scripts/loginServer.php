<?php
session_start();
//provera da li je korisnik vec ulogovan
if (isset($_SESSION["email"])){
    header("Location: ../index.php");
}else{
    //Connect to db
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");
    
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    //hash
    $password=md5($password);

    //Check if user exists
    $email_provera_query="SELECT * FROM users WHERE email ='$email' AND password='$password' LIMIT 1";
    $results =mysqli_query($db,$email_provera_query);
    $user = mysqli_fetch_assoc($results);
    if($user){
        $_SESSION["user_id"]=$user["id"];
        $_SESSION["email"]=$email;
        $_SESSION["admin"]=$user["admin"];
        $_SESSION["first_name"]=$user["first_name"];
        $_SESSION['message'] ="Welcome ".$user["first_name"];
        header("Location: ../index.php");
    }else{
        $_SESSION['message'] = 'Wrong email or password';
        header("Location: ../login.php");

    }
}