<?php
include_once "scripts/functions.php";
$id=$_GET['id'];
$sql ="SELECT * FROM books WHERE id=$id LIMIT 1";
$book=mysqli_fetch_assoc(mysqli_query($db,$sql));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bukstor <?php echo $book["title"];?></title>
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <!-- navigacija -->
    <?php 
    getNavigation();
    ?>
    <!-- telo -->

    <div class="container book">
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo $book["img_src"]?>" class="img-responsive center-block" alt="">
          <div class="text-center">
            <br>
             <?php 
             if(isset($book["format"]))echo '<p>Format:'.$book["format"].'</p>';
             if(isset($book["pages"]))echo '<p>Published:'.$book["pages"].'</p>';
             if(isset($book["relese"]))echo '<p>Published:'.$book["relese"].'</p>';
             ?>
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="title-knjige"><?php echo $book["title"]?></h2>
          <h3><?php echo $book["author"]?></h3>
          <h4>Categories:<?php echo $book["categories"]?></h4>
          <p class="oknjizi"> <?php echo $book["about"]?></p>
        </div>
        <div class="col-md-2">
          <div class="price">
            <?php
            $discount = (isset($book["discount"]))? $book["discount"]: 0;
            $total=$book["price"]-($book["price"]*($discount/100));
            echo'<h3>Price:'.$book["price"] .'</h3>';
            echo'<h4>Discount:'.$book["discount"].'%</h4>';            
            echo'<h3 class="ukupno">Total:'.$total.'</h3>';
            
            ?>
          </div>
          <div>
          <br><br>
          <a class="btn btn-primary btn-lg" href="checkOut.php?ids=<?php echo $book["id"]?>">Buy book</a>
          </div>
        </div>
      </div>
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