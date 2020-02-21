<?php
include_once "scripts/functions.php";
$favs = (isset($_SESSION["user_id"])) ? $_SESSION["favs"]:array();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Top List</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
<!-- navigacija -->
  <?php
  getNavigation();
  ?>
  <!-- telo -->
  <div class="container">
      <div class="page-header">
          <h1>
            Top List
          </h1>
        </div>
      <!-- thumbnail 1 -->
    <div class="row">
    <?php
     $sql ="SELECT * FROM `books` ORDER BY purchuses DESC LIMIT 10";
     $result = mysqli_query($db,$sql);
     $center =8;
        while($row = mysqli_fetch_assoc($result)){
          if($center==0) echo"<div class='col-md-2'></div>";
            $author=$row["author"];
            $title=$row["title"];
            $imgPath=$row["img_src"];
            $id=$row['id'];
            $farORfas=(in_array($id,$favs))?"fas":"far";
            echo ' <div class="col-md-3">
            <div class="thumbnail">
            <img src="'.$imgPath.'" class="img-responsive center-block">
            <div class="caption">
            <h3 class="text-center">'.$title.'</h3>
            <p class="text-center">'.$author.'</p>
            <p class="text-center">
            <a href="./book.php?id='.$id.'" class="btn btn-primary" role="button">&nbsp;More&nbsp;</a>
            <br><br>
            <i data-id="'.$id.'" onclick="addToFavorites(this)" class="'.$farORfas.' fa-heart fa-2x btn"></i>
            <i data-id="'.$id.'" onclick="addToCart(this)" class="fas fa-shopping-cart fa-2x btn"></i>
            </p>
            </div>
            </div>
            </div>';
            $center--;
      }
    ?>
  </div>

  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
      <!-- js -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="scripts/bootstrap.min.js"></script>
      <script src="scripts/main.js"></script>
  </body>
</html>