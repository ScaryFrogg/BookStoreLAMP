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
    <meta name="author" content="Pavle Milisavljević pavleelite2017@gs.viser.edu.rs">
    <meta name="description" content="Korpa za korisnike">
    <meta name="keywords" content="Prodavnica,Knjige,Korpa,kupovina">
    <title>Bukstor Korpa</title>

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
        Korpa
      </h1>
    </div>
      <!-- 1.knjiga -->
      <div class="row u-listi">
      <div class="col-md-2">
      <img src="./img/knjige/covek.jpg" class="slicica"alt="Čovek po imenu uve Fredrik Bakman">
      </div>
      <h3>Covek po imenu Uve <small>Fredrik Bakman</small> </h3>
      <p class="col-md-9">Upoznajte Uvea. On je džangrizalo – jedan od onih koji upiru prstom u ljude koji mu se ne dopadaju kao da su provalnici zatečeni pod njegovim prozorom. Svakog jutra Uve ide u inspekciju po naselju u kom živi. Premešta bicikle i proverava da li je đubre pravilno razvrstano – iako je već nekoliko godina prošlo otkako je razrešen dužnosti predsednika kućnog saveta. Ili otkako je „izvršen prevrat“, kako Uve govori o tome. Ljudi ga zovu „ogorčenim komšijom iz pakla“. Ali zar Uve mora da bude ogorčen samo zbog toga što ne šeta okolo sa osmehom zalepljenim na lice?
      <a href="./knjiga.html">Pročitaj više...</a>
      </p>
      <p class="col-md-1 text-center">1,599 RSD <br>
          <i class="fas fa-trash-alt fa-2x"></i>
      </p>
      </div>

      <!-- 2.knjiga -->
      <div class="row u-listi">
      <div class="col-md-2">
      <img src="./img/knjige/aleksandar.jpg" class="slicica"alt="Aleksandar od Jugoslavije Vuk Drašković">
      </div>
      <h3>Aleksandar od Jugoslavije<small>Vuk Drašković</small></h3>
      <p class="col-md-9">Da li je stvaranje Jugoslavije bilo veliko delo ili tragična zabluda – glasi pitanje nad pitanjima koje u novom romanu Vuka Draškovića sam sebi postavlja glavni protagonista, kralj Aleksandar Karađorđević, tvorac i prvi vladar nove države Južnih Slovena na početku XX veka. 
          <a href="./knjiga.html">Pročitaj više...</a>
      </p>
      <p class="col-md-1 text-center">999 RSD
        <br>
          <i class="fas fa-trash-alt fa-2x"></i>
      </p>
      </div>
    
      <!-- 3.knjiga -->
      <div class="row u-listi">
          <div class="col-md-2">
          <img src="./img/knjige/koreni.jpg" class="slicica"alt="Koreni Dobrica Ćosić">
        </div>
        <h3>Koreni<small>Dobrica Ćosić</small></h3>
        <p class="col-md-9">Smeštena u vreme političkih promena i previranja srpskog građanskog društva s kraja XIX i početkom XX veka, priča prati živote Aćima Katića, čoveka tradicionalnog kova i radikala, i njegovih sinova Vukašina i Đorđa. Budući političar i očeva nada, Vukašin se vraća sa studija u Parizu i saopštava da se ženi ćerkom liberala Tošića, Aćimovog političkog neprijatelja, i da prelazi u njegovu stranku. Aćim ga se odriče i, besan zbog sukoba sa sinom, poziva meštane u selu na dizanje bune. Drugi sin Đorđe, ugledan i bogat seljak, i njegova supruga Simka u isto vreme imaju bračne probleme jer godinama nemaju dece. U strahu od gašenja loze, Simka se odlučuje na očajnički potez: da zatrudni sa Đorđevim slugom.
        <a href="./knjiga.html">Pročitaj više...</a>
        </p>
        <p class="col-md-1 text-center">1,200 RSD
          <br>
          <i class="fas fa-trash-alt  fa-2x"></i>
        </p>
      </div>
    
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h3 class="text-center ukupno">Ukupno: 3,798</h3>
          <button role="button" class="btn btn-primary  center-block">Plati</button>
          </p>
        </div>
      </div>
  </div>

  <footer id="glavni-footer">
    <div class="row">
    <div class="col-md-12 text-center"> 
      <ul class="list-inline crna-lista">
        <li><a href="./knjige.html">Knjige</a></li>
        <li><a href="./onama.html">O nama</a></li>
        <li><a href="./kontakt.html">Kontakt</a></li>
        <li><a href="./faq.html">FAQ</a></li>
        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square fa-2x"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fab fa-twitter-square fa-2x"></i></a></li>
      </ul>
    </div>
  <!-- footer -->
  <?php 
    isipisHtml("footer");
  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>