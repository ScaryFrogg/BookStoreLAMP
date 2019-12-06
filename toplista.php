<?php
include_once "funkcije.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bukstor Top Lista</title>

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
  ispisiNavigaciju();
  ?>
  <!-- telo -->
  <div class="container">
      <div class="page-header">
          <h1>
            Top lista
          </h1>
        </div>
      <!-- thumbnail 1 -->
    <div class="row">
    <?php
     $sql ="SELECT * FROM `knjiga` ORDER BY br_kupovina DESC LIMIT 5";
     $rezultat = mysqli_query($db,$sql);
        while($red = mysqli_fetch_assoc($rezultat)){
            $autor=$red["autor"];
            $naslov=$red["naslov"];
            $putDoSlike=$red["slika"];
            $id=$red['knjiga_id'];
            echo ' <div class="col-md-3">
            <div class="thumbnail">
            <img src="'.$putDoSlike.'" class="img-responsive center-block">
            <div class="caption">
            <h3 class="text-center">'.$naslov.'</h3>
            <p class="text-center">'.$autor.'</p>
            <p class="text-center"><a href="./knjiga.php?id='.$id.'" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
            </div>
            </div>
            </div>';
      }
    ?>
  </div>

  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>