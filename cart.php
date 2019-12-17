<?php
include_once "scripts/functions.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Cart</title>

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
  
  <!-- navigacija -->
  <?php
    getNavigation();
  ?>
  <!-- telo -->

  <div class="container">
    <div class="page-header">
      <h1>
        <i class="fas fa-shopping-cart"></i> Shopping Cart 
      </h1>
    </div>
    <?php
      if(isset($_SESSION["admin"])){
        $id=$_SESSION["user_id"];
        $sql="SELECT * FROM shopping_carts WHERE `user_id`=$id;";
        $result =mysqli_query($db,$sql);
        if($result->{"num_rows"}!=0){
          while($bookFromList = mysqli_fetch_assoc($result)){
            $bookId=$bookFromList["book_id"];
            $sql_get_book="SELECT `title`, `author`, `img_src`, `about` FROM `books` WHERE book_id=$bookId;";
            $book=mysqli_fetch_assoc(mysqli_query($db,$sql_get_book));
            $author=$book["author"];
            $title=$book["title"];
            $imgPath=$book["img_src"];
            $about=$book["about"];
            echo ' <div class="row u-listi">
            <div class="col-md-2">
            <img src="'.$imgPath.'" class="slicica"alt="Putevi svile Piter Frankopan">
            </div>
            <h3>'.$title.' <small>'.$author.'</small> </h3>
            <p class="col-md-9">'.$about.'
            <a href="./book.php?id='.$bookId.'">Pročitaj više...</a>
            </p>
            <p class="col-md-1 text-center">1.599 RSD <br>
              <i data-id="'.$bookId.'" onclick="removeFromCartAndDelete(this)" class="fas fa-trash-alt fa-2x"></i>
            </p>
            </div>';
            
          }
          echo '
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <h3 class="text-center total">Total: <span id="total"></span></h3>
          <button role="button" class="btn btn-primary  center-block">Check out</button>
          </p>
          </div>
          </div>';
        }else echo "<h4 class='text-center'>You have nothing in your shopping cart</h4>";
      }else echo "<h4 class='text-center'>You have to be logged in to use cart</h4>";
    ?>
  </div>

  <!-- footer -->
  <?php 
    getHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/shoppingCart.js"></script>
</body>
</html>