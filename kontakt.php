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
    <meta name="description" content="Kontakt strana ">
    <meta name="keywords" content="Prodavnica,Knjige,Kontakt,email">
    <title>Bukstor Kontakt</title>

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
        <h1>Kontakt</h1>
      </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="exampleInputName1"> <i class="fas fa-user"></i> Ime i prezime</label>
            <input type="text" class="form-control"  placeholder="Unesite Vaše ime i prezime">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1"><i class="far fa-envelope" ></i> E-mail adresa</label>
              <input type="email" class="form-control"  placeholder="Unesite Vašu Email adresu">
          </div>
          <div class="form-group">
              <label for="exampleInputTelefon1"> <i class="fas fa-phone" aria-hidden="true"></i> Telefon</label>
              <input type="tel" class="form-control"  placeholder="Unesite Vaš broj telefona">
          </div>
          <div class="form-group">
            <label for="exampleInputSubject1"> <i class="fas fa-heading"></i> Naslov poruke</label>
            <input class="form-control"  placeholder="Unesite naslov Vaše poruke">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1"> <i class="fas fa-pencil-alt"></i> Poruka</label>
              <textarea class="form-control" rows="5"> </textarea>
          </div>
          <a href="./izlaznastrana2.html" type="submit" class="btn btn-lg btn-primary center-block">Pošalji</a>
        </form>
        </div>
        <div class="col-md-6">
            
           <p><i class="fas fa-map-marker" aria-hidden="true"></i> Adresa: <span class="pull-right">Vojvode Stepe 283, Voždovac</span></p> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.6173139229704!2d20.47988488717085!3d44.76821879436535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70f8df8b60e1%3A0x8fd9cdf24bd4d39!2z0JLQvtGY0LLQvtC00LUg0KHRgtC10L_QtSAyODMsINCR0LXQvtCz0YDQsNC0!5e0!3m2!1ssr!2srs!4v1546996091778" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <ul class="list-unstyled crna-lista">
                <li><i class="fas fa-phone" aria-hidden="true"></i> Telefon: <span class="pull-right"><a href="tel:+381-66-418-430">066/418-430</a></span></li>
                <li><i class="far fa-envelope" id="maile" aria-hidden="true"></i> E-mail: <span class="pull-right"><a href="mailto:pavleelite2017@gs.viser.edu.rs">pavleelite2017@gs.viser.edu.rs</a></span></li>
            </ul>                
            <p class="text-center"><a href="./kontaktstampa.html" class="btn btn-primary"><i class="fas fa-print fa-2x"></i></a></p>
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