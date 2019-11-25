<?php
session_start();
include_once "funkcije.php"
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
    isipisHtml("nav");
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
        
      <div class="col-md-12 center-block">
        <div class="thumbnail">
          <img src="./img/knjige/aleksandar.jpg" class="img-responsive" alt="...">
          <div class="caption">
            <h2 class="text-center text-danger">1.</h2>
            <h3 class="text-center">Aleksandar od Jugoslavije</h3>
            <p></p>
            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
          </div>
        </div>
      </div>
    </div>

      <!-- 2 -->
    <div class="row">
        <div class=" col-md-6">
            <div class="thumbnail">
              <img src="./img/knjige/koreni.jpg" class="img-responsive" alt="Koreni Dobrica Ćosić">
              <div class="caption">
                <h2 class="text-center text-danger">2.</h2>
                <h3 class="text-center">Koreni</h3>
                <p></p>
                <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
              </div>
            </div>
          </div>
        <!-- 3 -->
          <div class=" col-md-6">
            <div class="thumbnail">
              <img src="./img/knjige/zivot.jpg" class="img-responsive" alt="...">
              <div class="caption">
                <h2 class="text-center text-danger">3.</h2>
                <h3 class="text-center">Život bez krpelja</h3>
                <p></p>
                <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
              </div>
            </div>
          </div>
    </div>
    <div class="row">   
      <!-- 4 -->
      <div class="col-md-6">
        <div class="thumbnail">
          <img src="./img/knjige/covek.jpg"  class="img-responsive" alt="...">
          <div class="caption">
            <h2 class="text-center text-danger">4.</h2>
            <h3 class="text-center">Čovek po imenu Uve</h3>
            <p></p>
            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
          </div>
        </div>
      </div>
      <!-- 5 -->
      <div class="col-md-6">
        <div class="thumbnail">
          <img src="./img/knjige/molitva.jpg" class="img-responsive" alt="...">
          <div class="caption">
            <h2 class="text-center text-danger">5.</h2>
            <h3 class="text-center">Molitva moru</h3>
            <p></p>
            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">&nbsp;Više o knjizi&nbsp;</a> <a href="#" class="btn btn-primary" role="button">Dodaj u korpu</a></p>
          </div>
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