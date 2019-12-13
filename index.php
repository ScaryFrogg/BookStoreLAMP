<?php
include_once "./scripts/functions.php";
$favs = (isset($_SESSION["korisnik_id"])) ? $_SESSION["favs"]:array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- js -->
    <script src="scripts/main.js"></script>
  </head>
  <body>
<!-- Navigation -->
  <?php
    getNavigation();
  ?>
  <!-- Body -->

  <!-- jumbatron -->
  
  <div class="jumbotron">
    <div class="container">
      <h1 class="text-center">Welcome to Bukstor</h1>
      <br>
      <blockquote class="text-center">
        <cite title="Voldo Emerson">Make the most of yourself, for that is all there is of you.
          <footer>Ralph Waldo Emerson</footer>
        </cite>
      </blockquote>
          
    </div>
  </div>

  <!-- end of  jumbatron -->
  <!-- Top Books -->
  <div class="container">
    <div class="row">
      <h2>Top selling books: </h2>
      <?php
      $sql ="SELECT * FROM `knjiga` ORDER BY br_kupovina DESC LIMIT 4";
      $result = mysqli_query($db,$sql);
          while($red = mysqli_fetch_assoc($result)){
              $author=$red["autor"];
              $title=$red["naslov"];
              $img=$red["slika"];
              $id=$red['knjiga_id'];
              $farORfas=(in_array($id,$favs))?"fas":"far";
              echo ' <div class="col-md-3">
              <div class="thumbnail">
              <img src="'.$img.'" class="img-responsive center-block">
              <div class="caption">
              <h3 class="text-center">'.$title.'</h3>
              <p class="text-center">'.$author.'</p>
              <p class="text-center">
              <a href="./book.php?id='.$id.'" class="btn btn-primary" role="button">&nbsp;More&nbsp;</a>
              <br><br>
              <i data-id="'.$id.'" onclick="addToFavorites(this)" class="'.$farORfas.' fa-heart fa-2x btn"></i>
              <i data-id="'.$id.'" onclick="addTo('.$cart.',this)" class="fas fa-shopping-cart fa-2x btn"></i>
              </p>
              </div>
              </div>
              </div>';
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