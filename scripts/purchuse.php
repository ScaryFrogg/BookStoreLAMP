<?php
    include_once "functions.php";
    if(!isset($_GET["ids"])) header("Location: ../index.php");
    else $ids = explode("_",$_GET["ids"]);
    //var_dump($ids);
    foreach ($ids as $id){         
        $sql_get_book="SELECT * FROM `books` WHERE id=$id;";
        $book=mysqli_fetch_assoc(mysqli_query($db,$sql_get_book));
        
        $oldPuchuses=$book["purchuses"];           
        if(isset($_SESSION["user_id"])){
            $userId =$_SESSION["user_id"];
            
            $sql ="SELECT * FROM `shopping_carts` WHERE book_id=$id AND `user_id`=$userId";
            $result =mysqli_query($db,$sql);
            $bookFromList = mysqli_fetch_assoc($result);
           
            $quantites = $bookFromList["quantites"];
            
            $deleteSQL="DELETE FROM `shopping_carts` WHERE user_id=$userId";
            mysqli_query($db,$deleteSQL);
        }else{
            $quantites =1;
        }
        $purchuses=$oldPuchuses+$quantites;
        $updateSQL ="UPDATE `books` SET `purchuses`=$purchuses WHERE id=$id";
        mysqli_query($db,$updateSQL);
    }


    $_SESSION['message'] = 'Purchase successfull!';
    header("Location: ../index.php")
?>