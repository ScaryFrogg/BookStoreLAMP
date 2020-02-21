<?php
include_once "functions.php";
$email=$_POST["email"];
$email_provera_query="SELECT `subscribed` FROM users WHERE email ='$email' LIMIT 1";
$user = mysqli_fetch_assoc(mysqli_query($db,$email_provera_query));
$mod=($user['subscribed']) ?0:1;
$sqlUpdate="UPDATE `users` SET `subscribed`=$mod  WHERE email ='$email' LIMIT 1";
mysqli_query($db,$sqlUpdate);