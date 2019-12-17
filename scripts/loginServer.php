<?php
session_start();
//provera da li je korisnik vec ulogovan
if (isset($_SESSION["email"])){
    header("Location: ../index.php");
}else{
    //Connect to db
    $db=mysqli_connect('localhost','id11968293_scaryfrogg','sifrazadb','id11968293_mrzim_php') or die("Unable to connect to database.");
    
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    //hash
    $password=md5($password);

    //Check if user exists
    $email_provera_query="SELECT * FROM korisnici WHERE email ='$email' AND password='$password' LIMIT 1";
    $results =mysqli_query($db,$email_provera_query);
    $user = mysqli_fetch_assoc($results);
    if($user){
        $id =$user["user_id"];
        $_SESSION["user_id"]=$id;
        $_SESSION["email"]=$email;
        $_SESSION["admin"]=$user["admin"];

        header("Location: ../index.php");
    }else{
        echo "Wrong email and password combination";
    }
}