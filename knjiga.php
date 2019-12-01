<?php
session_start();
include_once "funkcije.php";
$id=$_GET['id'];
$sql ="SELECT * FROM knjiga WHERE knjiga_id=$id LIMIT 1";
$knjiga=mysqli_fetch_assoc(mysqli_query($db,$sql));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bukstor Knjiga</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <!-- navigacija -->
    <?php 
    isipisHtml("nav");
    ?>
    <!-- telo -->

    <div class="container knjiga">
      <div class="row">
        <div class="col-md-2">
          <img src="<?php echo $knjiga["slika"]?>" class="img-responsive center-block" alt="knjiga nema sliku">
          <div class="text-center">
            <p>Format:</p>
            <p>Broj strana:</p>
            <p>Pismo:</p>
            <p>Povez:</p>
            <p>Godina izdanja:</p>
            <p>ISBN:</p>
          </div>
        </div>
        <div class="col-md-7">  
          <h2 class="naslov-knjige"><?php echo $knjiga["naslov"]?></h2>
          <h3><?php echo $knjiga["autor"]?></h3>
          <h4>Kategorija:<?php echo $knjiga["kategorija"]?></h4>
          <p class="oknjizi"> <?php echo $knjiga["opis"]?></p>
        </div>
        <div class="col-md-3">
          <div class="cena">
            <h3>Cena: </h3>
            <h4>Popust: </h4>
            <h3 class="ukupno">Ukupno: </h3>
          </div>
        </div>
      </div>
    </div>
    
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>