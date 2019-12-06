<?php 
    session_start();
    //variables
    $favorites="'favorites'";
    $cart="'cart'";

    //Connection with database
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");


    //Get html file and dump on page
    function getHtml($x){
        $path="./html/$x.html";
        if (file_exists($path)){
            echo file_get_contents($path);
        }else{
            echo "Unable to load navigation please refresh";
        }
    }
    //Get Navigation
    function getNavigation(){
        if(isset($_SESSION["admin"])){
            if($_SESSION["admin"]){
                getHtml("navAdmin");
            }else getHtml("navCustomer");
          }else getHtml("nav");
    }

    //Check if user has that book in favorites
    function checkFavorites($userID,$bookID){
        $sql_check_favorites="SELECT * FROM `liste_zelja` WHERE `knjiga_id`=$userID AND `korisnik_id`=$bookID ";
        $result = mysqli_query($db,$sql_check_favorites);
        if(mysqli_num_rows($result)>0){
            return true;
        }else return false;
    }
?> 