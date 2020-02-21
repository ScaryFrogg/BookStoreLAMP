<?php
session_start();
$db=mysqli_connect('localhost','root','','mrzimo_php') or die("Neuspesna konecija sa bazom");

//provera da li je korisnik ulogovan
if(isset($_SESSION["user_id"])){
    $korisnikId=$_SESSION["user_id"];
$booksId=$_POST["id"];

$sql_provera="SELECT * FROM `shopping_carts` WHERE book_id=$booksId AND `user_id`=$korisnikId";
$provera=mysqli_fetch_assoc(mysqli_query($db,$sql_provera));

if($provera>0){
    if(isset($provera['quantites'])){
        if(($provera['quantites'])>1){
            $kom = $provera['quantites']-1;
            $sql_ukloni="UPDATE `shopping_carts` SET `quantites`=$kom WHERE book_id=$booksId AND `user_id`=$korisnikId";
            mysqli_query($db,$sql_ukloni);
            echo $kom;
        }else{
            $sql_ukloni="DELETE FROM `shopping_carts` WHERE  book_id=$booksId AND `user_id`=$korisnikId";
            mysqli_query($db,$sql_ukloni);
            echo "delete";
        }
        
    }
}else{
    echo false;
}
}
else{
    echo false;
}
?>