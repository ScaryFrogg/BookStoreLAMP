<?php
    session_start();

    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

    $email=$_SESSION["email"];
    $getUserSQL ="SELECT * FROM users WHERE email ='$email' LIMIT 1";
    $results =mysqli_query($db,$getUserSQL);
    $user = mysqli_fetch_assoc($results);
    $firstName="";
    if($user){
        $firstName=$user["first_name"];
    }
    echo $firstName
?>