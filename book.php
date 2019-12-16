<?php
include_once "scripts/functions.php";
$id=$_GET['id'];
$sql ="SELECT * FROM knjiga WHERE knjiga_id=$id LIMIT 1";
$book=mysqli_fetch_assoc(mysqli_query($db,$sql));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bukstor <?php echo $book;?></title>

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
          <img src="<?php echo $book["slika"]?>" class="img-responsive center-block" alt="">
          <div class="text-center">
            <p>Format:</p>
            <p>Published:</p>
            <p>ISBN:</p>
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="naslov-knjige"><?php echo $book["naslov"]?></h2>
          <h3><?php echo $book["autor"]?></h3>
          <h4>Categories:<?php echo $book["kategorija"]?></h4>
          <p class="oknjizi"> <?php echo $book["opis"]?></p>
        </div>
        <div class="col-md-2">
          <div class="price">
            <h3>Price: </h3>
            <h4>Discount: </h4>
            <h3 class="ukupno">Total: </h3>
          </div>
        </div>
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