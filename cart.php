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
            $sql_get_book="SELECT * FROM `books` WHERE id=$bookId;";
            $book=mysqli_fetch_assoc(mysqli_query($db,$sql_get_book));
            $author=$book["author"];
            $title=$book["title"];
            $imgPath=$book["img_src"];
            $about=$book["about"];
            $quantites = mysqli_fetch_assoc(mysqli_query($db,"SELECT `quantites` FROM `shopping_carts` WHERE book_id=$bookId AND `user_id`=$id"))['quantites'];
            
            
            $discount = (isset($book["discount"]))? $book["discount"]: 0;
            $single = $book["price"]-($book["price"]*($discount/100));
            $total=$book["price"]*$quantites-($book["price"]*$quantites*($discount/100));
            echo ' <div class="row u-listi">
            <div class="col-md-2">
            <img src="'.$imgPath.'" class="slicica"alt="Putevi svile Piter Frankopan">
            </div>
            <h3>'.$title.' <small>'.$author.'</small> </h3>
            <p class="col-md-9">'.$about.'
            <a href="./book.php?id='.$bookId.'" data-id='.$bookId.'>Pročitaj više...</a>
            </p>
            <p class="col-md-1 text-center">
            Single<span id="single">'.$single.'</span>
            <br>
            Qt. <span id="qt">'.$quantites.'</span>
            <br>
            Total<span id="price">'.$total.'</span><br>

              <i data-id="'.$bookId.'" onclick="removeFromCartAndDelete(this)" class="fas fa-trash-alt fa-2x"></i>
            </p>
            </div>';
            
          }
          echo '
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <h3 class="text-center total">Total: <span id="total"></span></h3>
          <button role="button" onclick="checkOut()" class="btn btn-primary name="btnCheckOut"  center-block">Check out</button>
          </p>
          </div>
          </div>';
        }else echo "<h4 class='text-center'>You have nothing in your shopping cart</h4>";
      }else echo '<h4 class="text-center">You have to be logged in to use cart</h4>
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
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/shoppingCart.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>