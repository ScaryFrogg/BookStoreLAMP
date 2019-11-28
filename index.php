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
    <title>Bukstor</title>

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
  if(isset($_SESSION["administrator"])){
    if($_SESSION["administrator"]){
      isipisHtml("navadmin");
    }else isipisHtml("navkupac");
  }else isipisHtml("nav");
?>
  <!-- telo -->

  <!-- jumbatron -->
  <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Dobro došli u Bukstor</h1>
        <br>
        <blockquote class="text-center">
          <cite title="Voldo Emerson">Dobru knjigu čini dobar čitalac.
            <footer> Voldo Emerson</footer>
          </cite>
        </blockquote>
            
      </div>
    </div>
  </div> <!-- kraj jumbatrona -->

  <!-- Slider -->
  <div class="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" ></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- Top lista knjiga -->
    <div class="item active">
      <a href="./toplista.html">
      <img src="./img/banner1.png" class="img-responsive" alt="Bukstor top lista">
      <div class="carousel-caption">
          Pogledajte naše najpopularnije knjige 
      </div>  
      </a>
      
    </div>
    <!-- sve knjige -->
    <div class="item">
      <a href="./knjige.html">
        <img src="./img/banner2.png" alt="Bukstor knjige">
        <div class="carousel-caption">
            Pogledajte naše najpopularnije knjige 
        </div>  
      </a>
      
    </div>
    <!-- Knjige u pripremi -->
    <div class="item">
      <a href="./upripremi.html">
        <img src="./img/banner3.png" alt="Bukstor knjige u pripremi">
        <div class="carousel-caption">
            Pogledajte naše najpopularnije knjige 
        </div>  
      </a>
      
    </div>
  </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- kraj slidera -->
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>