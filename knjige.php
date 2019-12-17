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
    <title>Bukstor Knjige</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- js -->
    <script src="./scripts/main.js"></script>
  </head>
  <body>
  <!-- navigation -->
  <?php 
  getNavigation();
  ?>
  <!-- body -->
<div class="container">
<div class="page-header">
  <h1>
    Books
  </h1>
</div>
<div class="row">

  <?php
  //TODO
    $sql ="SELECT * FROM `books` LIMIT 20";
    $result = mysqli_query($db,$sql);
      while($row = mysqli_fetch_assoc($result)){
          $author=$row["author"];
          $title=$row["title"];
          $imgPath=$row["img_src"];
          $id=$row['book_id'];
          $farORfas=(in_array($id,$favs))?"fas":"far";
          echo ' 
          <div class=" col-lg-3 col-md-4 col-xs-6">
          <div class="thumbnail">
            <img src="'.$imgPath.'" class="img-responsive" alt='.$title.' '.$author.'">
            <div class="caption">
              <h3 class="text-center">'.$title.'</h3>
              <p class="text-center">'.$author.'</p>
    
              <p class="text-center"><a href="./book.php?id='.$id.'" class="btn btn-primary" role="button">More</a></p>
              <p class="text-center"><i data-id="'.$id.'" onclick="addToFavorites(this)" class="'.$farORfas.' fa-heart fa-2x"></i>
              <i data-id="'.$id.'" onclick="addToCart(this)" class="fas fa-shopping-cart fa-2x"></i></p>
            </div>
          </div>
        </div>
        ';
    }
  ?>
  </div>
</div>
  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
  </body>
</html>