<?php 
    session_start();
    
    //Connection with database
    $db=mysqli_connect('localhost','root','','mrzimo_php') or die("Unable to connect to database.");

    //favorites
    $favs=array();
    if (isset($_SESSION["user_id"])){
        $sqlFavorites="SELECT book_id FROM favorites WHERE `user_id`=".$_SESSION["user_id"].";";
        $favResult =mysqli_query($db,$sqlFavorites);
        if($favResult){
            while($row=mysqli_fetch_array($favResult)){
                array_push($favs,$row[0]);
            }
        }
    }

    $_SESSION["favs"]=$favs;

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
        $sql_check_favorites="SELECT * FROM `favorites` WHERE `book_id`=$userID AND `user_id`=$bookID ";
        $result = mysqli_query($db,$sql_check_favorites);
        if(mysqli_num_rows($result)>0){
            return true;
        }else return false;
    }
    function redirectToHome(){
        header("Location: index.php");
    }
?> 