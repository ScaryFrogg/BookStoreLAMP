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
    <meta name="description" content="Lista Želja">
    <meta name="keywords" content="Prodavnica,Knjige,Lista želja">
    <title>Bukstor Lista Želja</title>

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
        Lista želja
      </h1>
    </div>
      <!-- 1.knjiga -->
      <div class="row u-listi">
      <div class="col-md-2">
      <img src="./img/knjige/putevisvile.jpg" class="slicica"alt="Putevi svile Piter Frankopan">
      </div>
      <h3>Putevi svile <small>Piter Frankopan</small> </h3>
      <p class="col-md-9">Putevi svile nisu bili egzotični niz puteva, nego mreže koje su povezivale kontinente i okeane. Po toj mreži putovale su ideje, roba, bolesti i smrt. Tu su se carstva osvajala – i gubila. Frankopanovo delo, plod dugogodišnjih istraživanja, temeljno menja sliku koju imamo o istoriji sveta. 
      <a href="./knjiga.html">Pročitaj više...</a>
      </p>
      <p class="col-md-1 text-center">1,599 RSD <br>
          <i class="fas fa-heart fa-2x"></i>
          <i class="fas fa-shopping-cart fa-2x"></i>
      </p>
      </div>

      <!-- 2.knjiga -->
      <div class="row u-listi">
      <div class="col-md-2">
      <img src="./img/knjige/agi.jpg" class="slicica"alt="Agi i Ema Igor Kolarov">
      </div>
      <h3>Agi i Ema<small>Igor Kolarov</small></h3>
      <p class="col-md-9">Po ovom poetskom i duhovitom romanu (ovenčanom Nagradom Politikinog Zabavnika za najbolju dečju knjigu) snimljen je prvi srpski film za decu posle dvadeset pet godina pauze, u režiji Milutina Petrovića. Roman je do sada preveden na engleski, ruski, francuski i italijanski jezik, a u Rusiji je za kratko vreme doživeo dva izdanja.
          <a href="./knjiga.html">Pročitaj više...</a>
      </p>
      <p class="col-md-1 text-center" > 699 RSD
        <br>
          <i class="fas fa-heart fa-2x "></i>
          <i class="fas fa-shopping-cart fa-2x"></i>
      </p>
      </div>
    
      <!-- 3.knjiga -->
      <div class="row u-listi">
          <div class="col-md-2">
          <img src="./img/knjige/veliki juris.jpg" class="slicica"alt="Veliki Juriš Slobodan Vladušić">
        </div>
        <h3>Veliki Juriš<small>Slobodan Vladušić</small></h3>
        <p class="col-md-9">Rano proleće 1916. godine: poručnik srpske vojske Miloš Vojnović oporavlja se na Krfu, u vili Ahileon, od prelaska preko Albanije. Tu upoznaje neobičnu Holanđanku Fani de Grot i postaje očevidac samoubistva srpskog majora koga niko nije oslovljavao po imenu. Napeta potraga za izgubljenim pismom koje je ostalo iza majora, Vojnovića će voditi kroz ulice Krfa, do vrhova Kajmakčalana, a zatim nazad, do solunskih kabarea i Solunskog fronta. Njegova sudbina će se preplitati sa životima Stanislava Krakova, vojvode Vuka, majora Kalafatovića, kao i sa akcijama tajanstvenog bugarskog oficira koga će pratiti u stopu, da bi se, na kraju puta, suočio sa maglom. 
        <a href="./knjiga.html">Pročitaj više...</a>
        </p>
        <p class="col-md-1 text-center">2,000 RSD
          <br>
          <i class="fas fa-heart fa-2x"></i>
          <i class="fas fa-shopping-cart fa-2x"></i>
        </p>
      </div>
    
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

          <a class="btn btn-primary center-block " href="./korpa.html">U Korpu</a>
        </div>
        <div class="col-md-4"></div>
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