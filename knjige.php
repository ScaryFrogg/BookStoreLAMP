<?php
include_once "functions.php"
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
    <script src="./js/main.js"></script>
  </head>
  <body>
  <!-- navigacija -->
  <?php
  if(isset($_SESSION["admin"])){
    if($_SESSION["admin"]){
      isipisHtml("navadmin");
    }else isipisHtml("navkupac");
  }else isipisHtml("nav");
  ?>
  <!-- telo -->
<div class="container">
<div class="page-header">
  <h1>
    Knjige
  </h1>
</div>
<div class="row">

    <?php
    //TODO
     $sql ="SELECT * FROM `knjiga` LIMIT 20";
     $rezultat = mysqli_query($db,$sql);
        while($red = mysqli_fetch_assoc($rezultat)){
            $autor=$red["autor"];
            $naslov=$red["naslov"];
            $putDoSlike=$red["slika"];
            $id=$red['knjiga_id'];
            echo ' 
            <div class=" col-lg-3 col-md-4 col-xs-6">
            <div class="thumbnail">
              <img src="'.$putDoSlike.'" class="img-responsive" alt='.$naslov.' '.$autor.'">
              <div class="caption">
                <h3 class="text-center">'.$naslov.'</h3>
                <p class="text-center">'.$autor.'</p>
      
                <p class="text-center"><a href="./knjiga.php?id='.$id.'" class="btn btn-primary" role="button">More</a></p>
                <p class="text-center"><i data-id="'.$id.'" onclick="dodajU('.$listazelja.',this)" class="fas fa-heart fa-2x"></i><i data-id="'.$id.'" onclick="dodajU('.$korpa.',this)" class="fas fa-shopping-cart fa-2x"></i></p>
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
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>