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
    <title>Bukstor Knjige</title>

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
    <h1>Knjige</h1>
  </div>

  <div class="row">
    <h2 id="trileri">Trileri:</h2>

    <div class=" col-lg-3 col-md-3 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/mojamracnamesta.jpg" class="img-responsive" alt="Moja mračna mesta
        Džejms Elroj">
        <div class="caption">
          
          <h3 class="text-center">Moja mračna mesta</h3>
          <p class="text-center">Džejms Elroj</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/sememraka.jpg " class="img-responsive" alt="Seme mraka
        Iva Kolega">
        <div class="caption">
          
          <h3 class="text-center">Seme mraka</h3>
          <p class="text-center">Iva Kolega</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/ubitialeksakrosa.jpg " class="img-responsive" alt="Ubiti Aleksa Krosa
        Džejms Paterson">
        <div class="caption">
          
          <h3 class="text-center">Ubiti Aleksa Krosa</h3>
          <p class="text-center">Džejms Paterson</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/prenegostobudekasno.jpg " class="img-responsive" alt="Pre nego što bude kasno
        Dušan Miklja">
        <div class="caption">
          
          <h3 class="text-center">Pre nego što bude kasno</h3>
          <p class="text-center">Dušan Miklja</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

  </div>
  <div class="row">
    <h2 id="decije">Dečije:</h2>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/agi.jpg" class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Agi i Ema</h3>
          <p class="text-center">Igor Kolarov</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/otkacenaskola.jpg" class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Otkačena škola</h3>
          <p class="text-center">Grupa autora</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>
    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/sestkolacica.jpg" class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          

          <h3 class="text-center">Šest čarobnih kolačića</h3>
          <p class="text-center">Biljana Crvenkovska</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/novogodisnje.jpg " class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Najlepše božićne i novogodisnje priče</h3>
          <p class="text-center">Grupa autora</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <h2 id="horori">Horori:</h2>
    
    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/slejdovavila.jpg " class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Slejdova vila</h3>
          <p class="text-center">Dejvid Mičel</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/gradogledala.jpg " class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Grad ogledala</h3>
          <p class="text-center">Džastin Kronin</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/alijenista.jpg " class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Alijenista</h3>
          <p class="text-center">Kejlab Kar</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/pajns.jpg " class="img-responsive" alt="Agi i Ema Igor Kolarov">
        <div class="caption">
          
          <h3 class="text-center">Pajns</h3>
          <p class="text-center">Blejk Krauč</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <h2 id="istorijski">Istorijski:</h2>
    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/seobe.jpg " class="img-responsive" alt="Seobe Miloš Crnjanski">
        <div class="caption">
          
          <h3 class="text-center">Seobe</h3>
          <p class="text-center">Miloš Crnjanski</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/aleksandar.jpg " class="img-responsive" alt="Aleksandar od Jugoslavije Vuk Drašković">
        <div class="caption">
          
          <h3 class="text-center">Aleksandar od Jugoslavije</h3>
          <p class="text-center">Vok Drašković</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/koreni.jpg " class="img-responsive" alt="Koreni Dobroca Ćosić">
        <div class="caption">
          
          <h3 class="text-center">Koreni</h3>
          <p class="text-center">Dobrica Ćosić</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>

    <div class=" col-lg-3 col-md-4 col-xs-6">
      <div class="thumbnail">
        <img src="./img/knjige/velikijuris.jpg " class="img-responsive" alt="Veliki juriš">
        <div class="caption">
          
          <h3 class="text-center">Veliki juriš</h3>
          <p class="text-center">Slobodan Vladušić</p>

          <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
          <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      <h2 id="ljubavni">Ljubavni:</h2>
      <div class=" col-lg-3 col-md-4 col-xs-6">
        <div class="thumbnail">
          <img src="./img/knjige/mesecevasestra.jpg " class="img-responsive" alt="Mesečeva sestra
          Lusinda Rajli
          ">
          <div class="caption">
            
            <h3 class="text-center">Mesečeva sestra</h3>
            <p class="text-center">Lusinda Rajli</p>

            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
            <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
          </div>
        </div>
      </div>

      <div class=" col-lg-3 col-md-4 col-xs-6">
        <div class="thumbnail">
          <img src="./img/knjige/pescanisat.jpg " class="img-responsive" alt="Peščani sat
          Trejsi Ris">
          <div class="caption">
            
            <h3 class="text-center">Peščani sat</h3>
            <p class="text-center">Trejsi Ris</p>

            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
            <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
          </div>
        </div>
      </div>

      <div class=" col-lg-3 col-md-4 col-xs-6">
        <div class="thumbnail">
          <img src="./img/knjige/njennajboljidrug.jpg " class="img-responsive" alt="Njen najbolji drug
          Džudi Rodžers">
          <div class="caption">
            
            <h3 class="text-center">Njen najbolji drug</h3>
            <p class="text-center">Džudi Rodžers</p>

            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
            <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
          </div>
        </div>
      </div>

      <div class=" col-lg-3 col-md-4 col-xs-6">
        <div class="thumbnail">
          <img src="./img/knjige/onmijesve.jpg " class="img-responsive" alt="On mi je sve
          Vaj Kiland">
          <div class="caption">
            
            <h3 class="text-center">On mi je sve</h3>
            <p class="text-center">Vaj Kiland</p>

            <p class="text-center"><a href="./knjiga.html" class="btn btn-primary" role="button">Više o knjizi</a></p>
            <p class="text-center"><a href="./listazelja.html"><i class="fas fa-heart fa-2x"></i></a><a href="./korpa.html"><i class="fas fa-shopping-cart fa-2x"></i></a></p>
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