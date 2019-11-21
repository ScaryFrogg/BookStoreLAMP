<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Pavle Milisavljević pavleelite2017@gs.viser.edu.rs">
    <meta name="description" content="Informacije o nama">
    <meta name="keywords" content="Prodavnica,Knjige,Informacije,O nama">
    <title>Bukstor O Nama</title>

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

    <div class="container" style="min-height: 75vh">
    <div class="page-header">
        <h1>
        O nama
        </h1>

    </div>
        <div>
          <br>
          <img src="./img/logo.png" alt="logo sajta" class="img-responsive center-block">
          <p>U želji da ponudimo alternativu postojećim standardima u domaćem knjižarstvu kao i da ljubiteljima knjige omogućimo da u što kraćem roku i po najpovoljnijim uslovima dođu do najnovijih naslova, svetskih hitova kao i primeraka koji se trenutno nalaze samo u Bukstor knjižarama, u ponudu smo uvrstili više od 50.000 naslova domaćih i stranih izdavača.</p>
          <p>U našoj internet prodavnici možete razgledati i kupovati više desetina hiljada različitih knjiga. Uživajte u čitanju, čitajte sa uživanjem, jer kod nas su sve dobre knjige na jednom mestu.</p>
          <br><br><br><br><br>
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