<?php
session_start();
$success=false;
if(isset($_POST["mod"])){
    header('Content-Type: application/json');
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");
 
    $mod=($_POST["mod"]=="upgrade")?1:0;
    $id=$_POST["id"];

    $update_user_sql="UPDATE `users` SET `admin`=$mod WHERE `id`=$id;";
    mysqli_query($db,$update_user_sql);
    $success=(mysqli_affected_rows($db)==1);
    
    $return=array(
        "id"=>$id,
        "mod"=>$mod,
        "success"=>$success
    );
    if((!$mod)&&$success){
        $_SESSION["admin"]=0;
    }
    echo json_encode($return);
    exit;
}else header("Location: ../index.php");