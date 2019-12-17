<?php
session_start();
//connecto to db
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

$success=false;
//Check if user is logged in
if(isset($_SESSION["user_id"])){
    $userId=$_SESSION["user_id"];
    $bookId=$_POST["id"];

    $sql_add="INSERT INTO `shopping_carts`(`book_id`, `user_id`, `quantity`) VALUES ($bookId,$userId,1)";
    $sql_check="SELECT `book_id`, `user_id` FROM `shopping_carts` WHERE book_id=$bookId AND user_id=$userId";
    $provera=mysqli_fetch_assoc(mysqli_query($db,$sql_check));
    mysqli_query($db,$sql_add);

    $success =true;
}
$return=array(
    "success"=>$success
);
echo json_encode($return);
exit;

