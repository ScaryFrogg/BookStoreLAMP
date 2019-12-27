<?php
include_once "scripts/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bukstor Favorites</title>

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
<!-- Navigation -->
<?php
  getNavigation();
?>
<!-- body -->
<div class="container">
  <div class="page-header">
    <h1>
      <i class="fas fa-heart" ></i> Favorites
    </h1>
  </div>
    <?php
    if(isset($_SESSION["admin"])){
      $id=$_SESSION["user_id"];
      $sql="SELECT * FROM favorites WHERE `user_id`=$id;";
      $result =mysqli_query($db,$sql);
      if($result->{"num_rows"}!=0){
        while($bookFromList = mysqli_fetch_assoc($result)){
          $bookId=$bookFromList["book_id"];
          $sql_dohvati_knjigu="SELECT `title`, `author`, `img_src`, `about` FROM `books` WHERE book_id=$bookId;";
          $book=mysqli_fetch_assoc(mysqli_query($db,$sql_dohvati_knjigu));
          $author=$book["author"];
          $title=$book["title"];
          $imgPath=$book["img_src"];
          $about=$book["about"];
          echo '
          <div class="row u-listi">
          <div class="col-md-2">
          <img src="'.$imgPath.'" class="slicica"alt="Putevi svile Piter Frankopan">
          </div>
          <h3>'.$title.' <small>'.$author.'</small> </h3>
          <p class="col-md-9">'.$about.'
          <a href="./book.php?id='.$bookId.'">More...</a>
          </p>
          <p class="col-md-1 text-center">Price $ <br>
          <i data-id="'.$bookId.'" onclick="addToFavorites(this)" class="fas fa-heart fa-2x" ></i>
          <i data-id="'.$bookId.'" onclick="addToCart(this)" class="fas fa-shopping-cart fa-2x"></i>
          </p>
          </div>';
        }
      }else echo "<h4 class='text-center'>You Favorites list is empty</h4>";
    }else echo'<h4 class="text-center">You have to be logged in to use this feature</h4>
    <br>
    <a href="./login.php"><button class="btn btn-primary center-block">Log in</button></a>
    <br>
    <a  href="./register.php"><button class="btn btn-primary center-block">Register</button></a>
    <br>';
  ?>
</div>
<!-- footer -->
<?php 
getHtml("footer");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
</body>
</html>